<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #ffffff);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

        .container {
            max-width: 900px;
            background: #fff;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            margin: 40px auto;
            padding: 40px;
        }

        h2 {
            color: #0d6efd;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-weight: 600;
        }

        .form-section {
            margin-bottom: 40px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 25px;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        textarea {
            resize: none;
        }

        .section-title {
            border-left: 4px solid #0d6efd;
            padding-left: 10px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Build Your Portfolio</h2>
        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="template" value="{{ $template }}">

            <!-- Personal Info -->
            <div class="form-section">
                <h4 class="section-title">Personal Information</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Full Stack Developer" required>
                    </div>
                    <div class="col-12">
                        <label>Bio</label>
                        <textarea name="bio" rows="3" class="form-control" placeholder="Short intro about yourself" required></textarea>
                    </div>
                    <div class="col-12">
                        <label>Profile Picture</label>
                        <input type="file" name="profile_image" class="form-control" accept="image/*" required>
                    </div>
                </div>
            </div>

            <!-- About Section -->
            <div class="form-section">
                <h4 class="section-title">About Section</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>About Title</label>
                        <input type="text" name="about_title" class="form-control" placeholder="About Me" required>
                    </div>
                    <div class="col-md-6">
                        <label>About Description</label>
                        <textarea name="about_description" rows="3" class="form-control" placeholder="Write a short description about yourself" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <div class="form-section">
                <h4 class="section-title">Services</h4>
                <div id="services-wrapper">
                    <div class="row g-3 mb-2">
                        <div class="col-md-6">
                            <input type="text" name="services[0][title]" class="form-control" placeholder="Service Title">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="services[0][description]" class="form-control" placeholder="Short Description">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary btn-sm" id="addService">+ Add Service</button>
            </div>

            <!-- Skills -->
            <div class="form-section">
                <h4 class="section-title">Skills</h4>
                <div id="skills-wrapper">
                    <div class="row g-3 mb-2">
                        <div class="col-md-12">
                            <input type="text" name="skills[0]" class="form-control" placeholder="Skill Name">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary btn-sm" id="addSkill">+ Add Skill</button>
            </div>

            <!-- Projects -->
            <div class="form-section">
                <h4 class="section-title">Projects</h4>
                <div id="projects-wrapper">
                    <div class="row g-3 mb-2">
                        <div class="col-md-3">
                            <input type="text" name="projects[0][title]" class="form-control" placeholder="Project Title">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="projects[0][description]" class="form-control" placeholder="Short Description">
                        </div>
                        <div class="col-md-3">
                            <input type="file" name="projects[0][image]" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="projects[0][link]" class="form-control" placeholder="Project Link">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary btn-sm" id="addProject">+ Add Project</button>
            </div>

            <!-- Submit -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Save & Generate Portfolio</button>
            </div>
            </form>
    </div>

    <script>
        let serviceCount = 1,
            skillCount = 1,
            projectCount = 1;

        document.getElementById('addService').addEventListener('click', function() {
            const wrapper = document.getElementById('services-wrapper');
            wrapper.insertAdjacentHTML('beforeend', `
            <div class="row g-3 mb-2">
                <div class="col-md-6">
                    <input type="text" name="services[${serviceCount}][title]" class="form-control" placeholder="Service Title">
                </div>
                <div class="col-md-6">
                    <input type="text" name="services[${serviceCount}][description]" class="form-control" placeholder="Short Description">
                </div>
            </div>`);
            serviceCount++;
        });

        document.getElementById('addSkill').addEventListener('click', function() {
            const wrapper = document.getElementById('skills-wrapper');
            wrapper.insertAdjacentHTML('beforeend', `
            <div class="row g-3 mb-2">
                <div class="col-md-12">
                    <input type="text" name="skills[${skillCount}]" class="form-control" placeholder="Skill Name">
                </div>
            </div>`);
            skillCount++;
        });

        document.getElementById('addProject').addEventListener('click', function() {
            const wrapper = document.getElementById('projects-wrapper');
            wrapper.insertAdjacentHTML('beforeend', `
            <div class="row g-3 mb-2">
                <div class="col-md-3">
                    <input type="text" name="projects[${projectCount}][title]" class="form-control" placeholder="Project Title">
                </div>
                <div class="col-md-4">
                    <input type="text" name="projects[${projectCount}][description]" class="form-control" placeholder="Short Description">
                </div>
                <div class="col-md-3">
                    <input type="file" name="projects[${projectCount}][image]" class="form-control" accept="image/*">
                </div>
                <div class="col-md-2">
                    <input type="text" name="projects[${projectCount}][link]" class="form-control" placeholder="Project Link">
                </div>
            </div>`);
            projectCount++;
        });
    </script>

</body>

</html>