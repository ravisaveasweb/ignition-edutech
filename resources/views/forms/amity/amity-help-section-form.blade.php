<div class="amity-cta-section p-4 p-md-5 rounded-4 shadow-lg">
    <form id="amityHelpForm" action="{{ route('enquiry.store') }}" class="row g-3 enquiry-form" method="POST">
        @csrf
        <input type="hidden" name="source" value="Amity Help Form">

        <div class="col-12">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="col-12">
            <input type="text" name="mobile" placeholder="Mobile Number" required>
        </div>

        <div class="col-12">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="col-12">
            <select class="mb-3" name="course_name" required>
                <option value="" disabled selected hidden>Select Program of Interest</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn-primary-custom w-100 py-3 shadow-lg">
                Get Free Counselling
            </button>
        </div>

    </form>
</div>
