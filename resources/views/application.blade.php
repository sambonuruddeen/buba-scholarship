<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Application Form - Senator Shehu Buba Umar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('components.header');

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="/submit-application" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Personal Information -->
                    <div class="form-section">
                        <h2 class="section-title">Personal Information</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label required-field">Full Name</label>
                                <input type="text" class="form-control" name="full_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Gender</label>
                                <select class="form-select" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Religion</label>
                               <select class="form-select" name="religion" required>
                                    <option value="">Select Religion</option>
                                    <option value="christianity">Christianity</option>
                                    <option value="islam">Islam</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Information -->
                    <div class="form-section">
                        <h2 class="section-title">Academic Information</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label required-field">Institution Name</label>
                                <input type="text" class="form-control" name="institution" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Course of Study</label>
                                <input type="text" class="form-control" name="course" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Current Level</label>
                                <select class="form-select" name="level" required>
                                    <option value="">Select Level</option>
                                    <option value="100">100 Level</option>
                                    <option value="200">200 Level</option>
                                    <option value="300">300 Level</option>
                                    <option value="400">400 Level</option>
                                    <option value="500">500 Level</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Current CGPA</label>
                                <input type="number" step="0.01" class="form-control" name="cgpa" required>
                            </div>
                        </div>
                    </div>

                    <!-- Local Government Information -->
                    <div class="form-section">
                        <h2 class="section-title">Local Government Information</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label required-field">Local Government Area</label>
                                <select class="form-select" name="lga" required>
                                    <option value="">Select LGA</option>
                                    <option value="alkaleri">Alkaleri</option>
                                    <option value="bauchi">Bauchi</option>
                                    <option value="bogoro">Bogoro</option>
                                    <option value="dass">Dass</option>
                                    <option value="kirfi">Kirfi</option>
                                    <option value="tafawa_balewa">Tafawa Balewa</option>
                                    <option value="toro">Toro</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Ward</label>
                                <input type="text" class="form-control" name="ward" required>
                            </div>
                        </div>
                    </div>


                    <!-- NIN and Bank Information -->
                    <div class="form-section">
                        <h2 class="section-title">NIN and Bank Information</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label required-field">National Identification Number (NIN)</label>
                                <input type="text" class="form-control" name="nin" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Account Number</label>
                                <input type="text" class="form-control" name="account_number" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Account Name</label>
                                <input type="text" class="form-control" name="account_name" required>
                            </div>
                        </div>
                    </div>

                    <!-- Documents Upload -->
                    <div class="form-section">
                        <h2 class="section-title">Required Documents</h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label required-field">Admission Letter</label>
                                <input type="file" class="form-control" name="admission_letter" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">School ID Card</label>
                                <input type="file" class="form-control" name="school_id" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Latest Result</label>
                                <input type="file" class="form-control" name="result" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label required-field">Indigene Certificate</label>
                                <input type="file" class="form-control" name="indigene_cert" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-submit">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer');
</body>
</html>
