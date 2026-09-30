    <form id="amityHomeBannerForm" action="{{ route('enquiry.store') }}" class="row enquiry-form" method="POST">
        @csrf
        <input type="hidden" name="source" value="Amity Hero Form">

        <div class="mb-3">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <input type="text" name="mobile" placeholder="Mobile Number" required>
        </div>

        <div class="mb-3">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="mb-3">
            <select class="mb-3" name="course_name" required>
                <option value="" disabled selected hidden>Select Program of Interest</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark w-100 py-3 rounded-3 fw-bold request-callback-btn">
            Request Callback
        </button>

    </form>
