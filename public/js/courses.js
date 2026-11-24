/* =========================================================
   Ignition Edutech — Amity Program Landing Pages
   Shared JS (IIFE scoped)
   ========================================================= */
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    /* Sticky mobile CTA show/hide after hero */
    var stickyCta = document.querySelector(".amt-sticky-cta");
    var hero = document.querySelector(".amt-hero");
    if (stickyCta && hero) {
      var toggleSticky = function () {
        var heroBottom = hero.getBoundingClientRect().bottom;
        if (window.innerWidth <= 991 && heroBottom < 0) {
          stickyCta.style.display = "flex";
        } else {
          stickyCta.style.display = "none";
        }
      };
      window.addEventListener("scroll", toggleSticky);
      window.addEventListener("resize", toggleSticky);
      toggleSticky();
    }

    /* Animated stat counters */
    var counters = document.querySelectorAll("[data-amt-counter]");
    if (counters.length && "IntersectionObserver" in window) {
      var animateCounter = function (el) {
        var target = parseFloat(el.getAttribute("data-amt-counter"));
        var suffix = el.getAttribute("data-amt-suffix") || "";
        var duration = 1200;
        var start = null;

        var step = function (timestamp) {
          if (!start) start = timestamp;
          var progress = Math.min((timestamp - start) / duration, 1);
          var value = (target * progress).toFixed(target % 1 !== 0 ? 1 : 0);
          el.textContent = value + suffix;
          if (progress < 1) {
            window.requestAnimationFrame(step);
          } else {
            el.textContent = target + suffix;
          }
        };
        window.requestAnimationFrame(step);
      };

      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              animateCounter(entry.target);
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.4 },
      );

      counters.forEach(function (c) {
        observer.observe(c);
      });
    }

    /* Course enquiry form submission */
    var forms = document.querySelectorAll(".amt-enquiry-form");
    forms.forEach(function (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var name = form.querySelector('[name="full_name"]');
        var mobile = form.querySelector('[name="mobile_number"]');
        var email = form.querySelector('[name="email_address"]');
        var interest = form.querySelector('[name="program_interest"]');
        var endpoint = form.getAttribute("data-submit-endpoint");
        var courseName = form.getAttribute("data-course-name") || "Course";
        var valid = true;

        [name, mobile, email].forEach(function (field) {
          if (!field) {
            return;
          }

          if (field && field.value.trim() === "") {
            if (field === email && !field.hasAttribute("required")) {
              field.classList.remove("is-invalid");
              return;
            }

            field.classList.add("is-invalid");
            valid = false;
          } else {
            field.classList.remove("is-invalid");
          }
        });

        if (
          mobile &&
          mobile.value &&
          !/^[6-9]\d{9}$/.test(mobile.value.trim())
        ) {
          mobile.classList.add("is-invalid");
          valid = false;
        }

        if (
          email &&
          email.value.trim() !== "" &&
          !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())
        ) {
          email.classList.add("is-invalid");
          valid = false;
        }

        if (
          interest &&
          interest.tagName === "SELECT" &&
          interest.selectedIndex === 0
        ) {
          interest.classList.add("is-invalid");
          valid = false;
        } else if (interest) {
          interest.classList.remove("is-invalid");
        }

        if (valid) {
          var btn = form.querySelector('button[type="submit"]');
          var original = btn ? btn.innerHTML : "";
          var interestValue =
            interest && interest.value ? interest.value.trim() : "";
          var payload = new FormData();

          payload.append("form_type", "contact");
          payload.append("name", name ? name.value.trim() : "");
          payload.append("mobile", mobile ? mobile.value.trim() : "");
          payload.append("email", email ? email.value.trim() : "");
          payload.append("subject", courseName + " Enquiry");
          payload.append(
            "message",
            interestValue
              ? "Interested in: " + interestValue
              : "Interested in " + courseName
          );

          if (!endpoint) {
            console.error("Missing data-submit-endpoint on course enquiry form.");
            return;
          }

          Swal.fire({
            title: "Sending Request...",
            text: "Please wait while we process your details.",
            allowOutsideClick: false,
            didOpen: function () {
              Swal.showLoading();
            },
          });

          if (btn) {
            btn.disabled = true;
          }

          fetch(endpoint, {
            method: "POST",
            body: payload,
          })
            .then(function (response) {
              return response.text();
            })
            .then(function (data) {
              if (data.trim() === "success") {
                Swal.fire({
                  icon: "success",
                  title: "Thank You!",
                  text: "Your message has been sent successfully.",
                  confirmButtonColor: "#3085d6",
                });
                form.reset();
                if (window.jQuery && interest && interest.tagName === "SELECT") {
                  window.jQuery(interest).val(null).trigger("change");
                }
              } else {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: data || "Something went wrong while sending the mail.",
                });
              }
            })
            .catch(function () {
              Swal.fire({
                icon: "error",
                title: "Server Error",
                text: "Could not connect to the server. Please try again later.",
              });
            })
            .finally(function () {
              if (btn) {
                btn.disabled = false;
                btn.innerHTML = original;
              }
            });
        }
      });
    });

    /* Smooth scroll for in-page TOC / anchor links */
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener("click", function (e) {
        var targetId = this.getAttribute("href");
        if (targetId.length > 1) {
          var target = document.querySelector(targetId);
          if (target) {
            e.preventDefault();
            var offset = 90;
            var top =
              target.getBoundingClientRect().top + window.pageYOffset - offset;
            window.scrollTo({ top: top, behavior: "smooth" });
          }
        }
      });
    });
  });
})();
