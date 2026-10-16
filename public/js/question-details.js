
document.addEventListener('DOMContentLoaded', function () {
    const answerInput = document.getElementById('iqdAnswerInput') || document.getElementById('iq-answer-body');
    const charCount = document.getElementById('iqdAnswerCharCount');
    const answerForm = document.getElementById('iqdAnswerForm') || document.querySelector('.iq-answer-form');
    const answerMessage = document.getElementById('iqdAnswerMessage');
    const answerSort = document.getElementById('iqdAnswerSort');
    const answerList = document.getElementById('iqdAnswerList');

    function showMessage(message, type) {
        if (!answerMessage) return;
        answerMessage.textContent = message;
        answerMessage.className = 'iqd-form-message iqd-message-visible iqd-message-' + type;
    }

    if (answerInput && charCount) {
        charCount.textContent = answerInput.value.length;

        answerInput.addEventListener('input', function () {
            charCount.textContent = answerInput.value.length;
        });
    }

    document.querySelectorAll('[data-helpful-button]').forEach(function (button) {
        button.addEventListener('click', function () {
            const countElement = button.querySelector('[data-helpful-count]');
            const alreadyVoted = button.classList.contains('iqd-voted');

            if (!countElement) return;

            let count = Number(countElement.textContent) || 0;
            count += alreadyVoted ? -1 : 1;
            countElement.textContent = count;
            button.classList.toggle('iqd-voted', !alreadyVoted);

            const icon = button.querySelector('i');
            if (icon) {
                icon.className = alreadyVoted
                    ? 'bi bi-hand-thumbs-up'
                    : 'bi bi-hand-thumbs-up-fill';
            }

            const card = button.closest('.iqd-answer-card');
            if (card) {
                card.dataset.helpful = count;
            }
        });
    });

    document.querySelectorAll('[data-reply-name]').forEach(function (button) {
        button.addEventListener('click', function () {
            if (!answerInput) return;

            const author = button.dataset.replyName || 'this student';
            answerInput.value = '@' + author + ' ';
            answerInput.dispatchEvent(new Event('input'));

            answerInput.focus();

            const writeAnswer = document.getElementById('iqdWriteAnswer') || answerForm;
            if (writeAnswer) {
                writeAnswer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });
    });

    if (answerSort && answerList) {
        answerSort.addEventListener('change', function () {
            const cards = Array.from(answerList.querySelectorAll('.iqd-answer-card'));

            cards.sort(function (a, b) {
                if (answerSort.value === 'latest') {
                    return Number(b.dataset.date || 0) - Number(a.dataset.date || 0);
                }

                return Number(b.dataset.helpful || 0) - Number(a.dataset.helpful || 0);
            });

            cards.forEach(function (card) {
                answerList.appendChild(card);
            });
        });
    }

    const shareButton = document.getElementById('iqdShareQuestion');

    if (shareButton) {
        shareButton.addEventListener('click', async function () {
            try {
                if (navigator.share) {
                    await navigator.share({
                        title: document.querySelector('.iqd-question-title')?.textContent.trim(),
                        url: window.location.href
                    });
                } else if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(window.location.href);
                    showMessage('Question link copied successfully.', 'success');
                } else {
                    showMessage('Copy the page URL from your browser address bar to share this question.', 'success');
                }
            } catch (error) {
                if (error.name !== 'AbortError') {
                    showMessage('Unable to share right now. Please copy the page URL.', 'error');
                }
            }
        });
    }

    const reportButton = document.getElementById('iqdReportQuestion');

    if (reportButton) {
        reportButton.addEventListener('click', function () {
            alert('Question reporting will be available after backend integration.');
        });
    }

    if (answerForm && answerInput) {
        answerForm.addEventListener('submit', function (event) {
            if (!answerInput.value.trim()) {
                event.preventDefault();
                showMessage('Please write your answer before submitting.', 'error');
                answerInput.focus();
            }

            // Valid answers submit normally to Laravel and are saved by QuestionController.
        });
    }
});
