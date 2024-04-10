<?php include '../app/pages/includes/header.php'; ?>

    <section class="py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="mb-4 display-5 text-center">Contact</h2>
            <p class="text-secondary mb-5 text-center">The best way to contact us is to use our contact form below. Please fill out all of the required fields and we will get back to you as soon as possible.</p>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-6">
            <div class="bg-white border rounded shadow-sm overflow-hidden">

            <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
                <input type="hidden" name="access_key" value="e0230737-e106-4974-9f36-9af4a2f965b1">
                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="" required>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                    </span>
                    <input type="email" class="form-control" name="email" value="" required>
                    </div>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="message" rows="3" required></textarea>
                </div>
                <div class="col-12">
                    <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Submit</button>
                    </div>
                </div>
                </div>
            </form>

            </div>
        </div>
        </div>
    </div>
    </section>

<?php include '../app/pages/includes/footer.php'; ?>

</body>
</html>