<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="icon" href="{{asset('images/icons8-man-curly-hair-medium-skin-tone-96.png')}}">
  <link rel="stylesheet" href="{{asset('styles/css/style.css')}}">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <script src="{{asset('styles/js/myjs.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- ----------------------Ini Script Sweetalert-------------------------- -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
  <div class="main-container">
    <header class="header">
      <h2 id="logo" class="logo">Jay<span>.dy</span></h2>
      <nav class="navbar">
        <a href="#home" class="active" >Home</a>
        <a href="#about">About</a>
        <a href="#resume">Resume</a>
        <a href="#portfolio">Projects</a>
        <a href="#contact">Contact</a>
      <div class="autentikasi">
        <a href="/index"><button id="loginBtn">Login</button></a>
      </div>
      </nav>
    </header>

    <section class="home" id="home">
      <div class="home-content">
        <br>

        <h1>Hi!, I'm Jayfline <span>Hutagalung</span></h1>
        <h2><span class="auto-type"></span></h2>
        <p>
          Welcome to my personal portfolio website! I'm thrilled to have you
          here to explore my works that I've gathered with dedication and
          passion. This portfolio is a reflection of my creative and
          professional journey, and I hope you'll find inspiration within it.
          From captivating graphic designs to innovative web development, I've
          strived to create unique and captivating solutions. Thank you for
          visiting, and I hope you'll enjoy the journey through my works.
        </p>
        <div class="btn-box">
          <a href="#">Hire Me</a>
          <a href="#contact-form">Let's Talk</a>
        </div>
        <br>
        <div class="btn-dwld">
          <a href="{{asset('images/CV.png')}}" download="Curriculum Vitae-Jayfline Hutagalung">Download CV</a>
        </div>
      </div>
      <div class="my-profile">
        <img src="{{asset('images/my-photo-edited.png')}}" alt="My Photo" />
      </div>
    </section>
    <br>

    <section class="about" id="about">
      <div class="about-content">
        <h2>
          <center>About Me</center>
        </h2>
        <p>
          I am a passionate individual in the creative field, with a primary
          focus on graphic design and web development. Throughout my
          professional journey, I have learned to blend technical skills with a
          strong aesthetic sense, creating visually captivating and impactful
          experiences. I'm always excited to explore new technologies and the
          latest design trends, and I'm committed to continually honing my
          skills to stay relevant in this ever-changing world. Additionally, I
          believe that collaboration is the key to success, and I enjoy working
          with clients and colleagues to produce exceptional outcomes. I hope
          that through this portfolio, you can get to know me better.
        </p>
        Here are some of the achievements I have attained so far.
      </div>
      <br>
    </section>

    <section class="slide-about">
      <div class="slide-container-about">
        <div class="slide-content-about">
          <div class="card-wrapper-about">
            <div class="card-about">
              <div class="image-content-about">
                <span class="overlay-about"></span>
                <div class="card-image-about">
                  <img src="{{asset('images/sertifikat-sql.png')}}" alt="Sertifikat Belajar Dasar Google Cloud" class="card-img-about">
                </div>
              </div>
              <div class="card-content-about">
                <h2 class="serti-name">Certificate "Belajar Dasar Structured Query Language"</h2>
                <p class="serti-desc">The certificate above is proof that I have attended the class
                  from Dicoding by topic <b><em>Learn SQL Basics</em></b></p>
                <a href="https://dicoding.com/certificates/07Z6840V2XQR" target="_blank"><button
                    class="btn-view-serti">View Certificate</button></a>
              </div>
            </div>
          </div>

          <div class="card-wrapper-about">
  <div class="card-about">
    <div class="image-content-about">
      <span class="overlay-about"></span>
      <div class="card-image-about">
        <img src="{{asset('images/sertifikat-dicoding.png')}}" alt="Sertifikat Belajar Dasar Google Cloud" class="card-img-about">
      </div>
    </div>
    <div class="card-content-about">
      <h2 class="serti-name">Certificate "Belajar Dasar Google Cloud"</h2>
      <p class="serti-desc">The certificate above is proof that I have attended the class from Dicoding by topic <b><em>Learn Google Cloud Basics</em></b></p>
      <a href="https://www.dicoding.com/certificates/0LZ01GEWQP65" target="_blank"><button class="btn-view-serti">View Certificate</button></a>
    </div>
  </div>
</div>

<div class="card-wrapper-about">
  <div class="card-about">
    <div class="image-content-about">
      <span class="overlay-about"></span>
      <div class="card-image-about">
        <img src="{{asset('images/sertifikat git.png')}}" alt="Sertifikat Belajar Dasar Google Cloud" class="card-img-about">
      </div>
    </div>
    <div class="card-content-about">
      <h2 class="serti-name">Certificate "Belajar Dasar Git dengan Github"</h2>
      <p class="serti-desc">The certificate above is proof that I have attended the class from Dicoding by topic <b><em>Learning Basic Git with Github</em></b></p>
      <a href="https://www.dicoding.com/certificates/1OP81J028ZQK" target="_blank"><button class="btn-view-serti">View Certificate</button></a>
    </div>
  </div>
</div>
</div>

<div class="slide-container-about">
  <div class="slide-content-about">
    <div class="card-wrapper-about">
      <div class="card-about">
        <div class="image-content-about">
          <span class="overlay-about"></span>
          <div class="card-image-about">
            <img src="{{asset('images/sertifikat-webinar.png')}}" style="height: 210px; width: 302px;" alt="Sertifikat Belajar Dasar Google Cloud" class="card-img-about">
          </div>
        </div>
        <div class="card-content-about">
          <h2 class="serti-name">BEM IT Del Webinar Certificate</h2>
          <p class="serti-desc">The certificate above is proof that I have attended the webinar with the title "Becoming a Young Leader +1 with Public Speaking Skills"</p>
          <a href="https://drive.google.com/drive/folders/1QOVmb74n3kHXz1hEvGWi5znohTZGs2Ij?usp=sharing" target="_blank"><button class="btn-view-serti">View Certificate</button></a>
        </div>
      </div>
    </div>

    <div class="card-wrapper-about">
      <div class="card-about">
        <div class="image-content-about">
          <span class="overlay-about"></span>
          <div class="card-image-about">
            <img src="{{asset('images/sertifikat-idg.png')}}" style="height: 210px; width: 302px;" alt="Sertifikat Belajar Dasar Google Cloud" class="card-img-about">
          </div>
        </div>
        <div class="card-content-about">
          <h2 class="serti-name">Certificate of Appreciation</h2>
          <p class="serti-desc">The certificate above is proof that I have participated as a member of the Equipment of Committee in The IDG Ceremony at IT Del</p>
          <a href="https://drive.google.com/drive/folders/1QOVmb74n3kHXz1hEvGWi5znohTZGs2Ij?usp=sharing" target="_blank"><button class="btn-view-serti">View Certificate</button></a>
        </div>
      </div>
    </div>

    <div class="card-wrapper-about">
      <div class="card-about">
        <div class="image-content-about">
          <span class="overlay-about"></span>
          <div class="card-image-about">
            <img src="{{asset('images/sertifikat-kpu.png')}}" style="height: 210px; width: 302px;" alt="Sertifikat Belajar Dasar Google Cloud" class="card-img-about">
          </div>
        </div>
        <div class="card-content-about">
          <h2 class="serti-name">Certificate of Appreciation</h2>
          <p class="serti-desc">The certificate above is proof that I have participated as a Member of the Multimedia and Documentation Division in the KPU event at IT Del.</p>
          <a href="https://drive.google.com/drive/folders/1QOVmb74n3kHXz1hEvGWi5znohTZGs2Ij?usp=sharing" target="_blank"><button class="btn-view-serti">View Certificate</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<br>



  <section class="skill" id="resume">
  <div class="skill-content">
    <h2><center>Resume</center></h2>
    <div class="wrapper-bar">
      <div class="skills-container">
        <div class="container-bar">
          <div class="skills-bar">
            <h3>Technical Skills</h3>
            <div class="details">
              <span>HTML</span>
              <span>90%</span>
            </div>
            <div class="bar">
              <div id="html-bar"></div>
            </div>
          </div>

          <div class="skills-bar">
            <div class="details">
              <span>CSS</span>
              <span>85%</span>
            </div>
            <div class="bar">
              <div id="css-bar"></div>
            </div>
          </div>

          <div class="skills-bar">
            <div class="details">
              <span>JavaScript</span>
              <span>70%</span>
            </div>
            <div class="bar">
              <div id="jascript-bar"></div>
            </div>
          </div>

          <div class="skills-bar">
            <div class="details">
              <span>Photoshop</span>
              <span>88%</span>
            </div>
            <div class="bar">
              <div id="pshop-bar"></div>
            </div>
          </div>
        </div>

        <div class="container-bar">
          <div class="skills-bar">
            <h3>Professional Skills</h3>
            <div class="details">
              <span>Communication</span>
              <span>80%</span>
            </div>
            <div class="bar">
              <div id="communication-bar"></div>
            </div>
          </div>

          <div class="skills-bar">
            <div class="details">
              <span>Team Work</span>
              <span>80%</span>
            </div>
            <div class="bar">
              <div id="teamwork-bar"></div>
            </div>
          </div>

          <div class="skills-bar">
            <div class="details">
              <span>Project Management</span>
              <span>75%</span>
            </div>
            <div class="bar">
              <div id="proment-bar"></div>
            </div>
          </div>

          <div class="skills-bar">
            <div class="details">
              <span>Leadership</span>
              <span>85%</span>
            </div>
            <div class="bar">
              <div id="leader-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</section>


<div class="education">
  <h2><center>Educations</center></h2>
  <br>
  <div class="container-timeline">
    <div class="vertical-timeline">
      <ul>
        <li>
          <div class="timeline-content">
            <h1>W.R. Supratman 1 Kindergarten</h1>
            <p>2008-2010</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h1>SUTOMO 1 Elementary School</h1>
            <p>2010-2015</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h1>SUTOMO 1 Junior High School</h1>
            <p>2016-2019</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h1>SUTOMO 1 Senior High School</h1>
            <p>2019-2021</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <h1>College/University IT Del</h1>
            <p>2021-Present</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="experience" id="experience">
    <h2><center>Experiences</center></h2>
    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left: 260px;">
        Add Experience
    </button>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: #081b29">Add new Experience</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
    
                <!-- Modal body (form content) -->
                <div class="modal-body">
                    <form id="myForm" action="/portfolio" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                            @error('judul')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
    
                            <label for="tahun">Periode</label>
                            <input type="text" class="form-control" name="tahun">
                            @error('tahun')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
                <!-- Close the modal -->
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel" style="color: #081b29">Edit Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editExperienceForm" data-url="{{ url('/portfolio/') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="editId" name="id">

                    <label for="edit-judul">Judul</label>
                    <input type="text" id="edit-judul" name="judul">

                    <label for="edit-tahun">Periode</label>
                    <input type="text" id="edit-tahun" name="tahun">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="updatePortfolioBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Edit -->


    <div class="container-timeline">
    <div class="vertical-timeline">
        <ul>
            @forelse ($portfolio as $item)
            <li>
                <div class="timeline-content">
                    <h1>{{$item->judul}}</h1>
                    <p>{{$item->tahun}}</p>
                    <!-- Tombol edit dengan menggunakan modal -->
                    <button class="btn btn-warning btn-sm open-edit-modal" data-portfolio-id="{{ $item->id }}" data-toggle="modal" data-target="#editModal">
                        Edit
                    </button>
                    <!-- Tombol delete -->
                    <button class="btn btn-danger btn-sm delete-portfolio" data-portfolio-id="{{ $item->id }}">
                    Delete
                    </button>
                </div>
            </li>
            @empty
            <li>
                <h4>There is no such data in the database</h4>
            </li>
            @endforelse
        </ul>
    </div>
</div>


  <section class="project" id="portfolio">
    <div class="project-content">
      <h2>
        <center>Projects</center>
      </h2>
      <ul>
        <li><b>Gemastik Project</b></li>
        <br />
        <img src="{{asset('images/ecofficient.jpg')}}" alt="Proyek Gemastik" width="300" height="400" />
        <p>
          This gemastik project is a joint project that I have carried out
          complete it together with my partners.
        </p>
        <br />
        <li><b>PBO Project</b></li>
        <br />
        <img src="{{asset('images/flimena-login.jpg')}}" alt="flimena-login" width="600" height="400" />
        <img src="{{asset('images/flimena-register.jpg')}}" alt="flimena-register" width="600" height="400" />
        <p>
          This Flimena project is a joint project that I and My colleagues
          finished it in the 3rd semester. Flimena is a software that can save
          our package data that we have sent to del and the data is stored in
          the database we have prepared.
        </p>
        <br />
        <li><b>IT Del Library Website Redesign Project</b></li>
        <br />
        <img src="{{asset('images/Proyek-IMK-RedesignWebOlis.png')}}" alt="Proyek Redesign Website Perpustakaan IT Del" width="400"
          height="600" />
        <p>
          The IT Del Library Website Redesign Project is one of them personal
          project from the IMK (Human Computer Interaction) course.
        </p>
        <br />
        <li><b>IT Del Homepage Redesign Project</b></li>
        <br />
        <img src="{{asset('images/Proyek-IMK-RedesignWebITDel.png')}}" alt="Proyek Redesign Homepage Website IT Del" width="400"
          height="600" />
        <p>
          The Homepage Redesign Project of the IT Del Website is also wrong
          one personal project from the IMK course (Human Interaction
          Computer).
        </p>
      </ul>
    </div>
  </section>

  <section class="contact-content" id="contact">
    <div class="contact-content">
      <h2>Contact</h2>
      <div class="contact1">
        <p>
          You can also connect with me through my social media. Feel free to
          send messages or follow my account on the platform your favorite!
        </p>
        <div class="cont-soc">
          <a href="https://github.com/jayfline" target="_blank"><i class="bx bxl-github"></i></a>
          <a href="https://instagram.com/jayy.dy?utm_source=qr&igshid=MzNlNGNkZWQ4Mg==" target="_blank"><i
              class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/jayflinehutagalung/" target="_blank"><i class="bx bxl-linkedin"></i></a>
          <a href="https://wa.me/6285270303017" target="_blank"><i class="bx bxl-whatsapp"></i></a>
        </div>
        <p>
          Feel free to contact me via the form below, I'd love to read your
          messages!
        </p>
        <br />
        
        <form id="contact-form">
          <table cellpadding="5">
              <h3 align="center">
                Contact Me
              </h3>
              <hr />
            <tr>
              <td><label for="name">Name</label></td>
              <td><input type="text" id="name" name="name" /></td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
              <td><input type="email" id="email" name="email" /></td>
            </tr>
            <tr>
              <td><label for="message">Message</label></td>
              <td>
                <textarea id="message" name="message" rows="5"></textarea>
              </td>
            </tr>
            <tr align="center">
              <td colspan="2"></td>
            </tr>
            <tr align="right">
              <td colspan="2">
                <input type="submit" value="Submit" style="font-weight: 700;" />
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <hr />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>
  <br />

  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

  <!-- Script Untuk logo kembali ke home -->
  <script>
    document.getElementById("logo").addEventListener("click", function() {
      window.location.href = "#home";
    });
  </script>

  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>

var typed = new Typed(".auto-type", {
      strings: ["UI/UX Enthusiast.", "Web Developer.", "Photography Hobbyist."],
      typeSpeed: 120,
      backSpeed: 120,
      loop: true
    })


</script>


<script>
// ---------------------------------------- SCRIPT AUTENTIKASI DENGAN JS--------------------------------

  
// ---------------------------------------- BAGIAN AKHIR SCRIPT AUTENTIKASI DENGAN JS--------------------------------

    $(document).ready(function () {
        $('#addExperienceForm').on('submit', function (event) {
            event.preventDefault();
            var formData = {
                judul: $('#judul').val(),
                tahun: $('#tahun').val(),
                _token: $('input[name=_token]').val()
            };
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                success: function (response) {
                    $('#myModal').modal('hide');
                    window.location.reload();
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });

        // Fungsi untuk mengisi modal edit berdasarkan ID
        function fillEditModal(id) {
            console.log('Filling modal for ID:', id);
            // Menggunakan AJAX untuk mendapatkan data pengalaman berdasarkan ID
            $.ajax({
                url: '/portfolio/' + id + '/edit',
                method: 'GET',
                success: function (response) {
                    // Pastikan bahwa response adalah objek dengan properti judul dan tahun
                    if (response && response.hasOwnProperty('judul') && response.hasOwnProperty('tahun')) {
                        // Mengisi nilai input pada modal dengan data pengalaman yang didapatkan
                        $('#edit-judul').val(response.judul);
                        $('#edit-tahun').val(response.tahun);
                        $('#editId').val(id);

                        // Menampilkan modal edit
                        $('#editModal').modal('show');
                    } else {
                        console.log('Invalid response format.');
                    }
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        }

        // Menanggapi klik pada tombol edit
        $('.open-edit-modal').on('click', function () {
            var portfolioId = $(this).data('portfolio-id');
            fillEditModal(portfolioId);
        });

        // Menanggapi klik pada tombol "Update" pada modal edit
        $('#updatePortfolioBtn').on('click', function () {
            console.log('Button clicked!');
            var formData = {
                judul: $('#edit-judul').val(),
                tahun: $('#edit-tahun').val(),
                _token: $('input[name=_token]').val(),
                _method: 'PUT'
            };
            var experienceId = $('#editId').val();

            $.ajax({
                url: '/portfolio/' + experienceId,
                method: 'POST',
                data: formData,
                success: function (response) {
                    $('#editModal').modal('hide');  // Menutup modal edit dengan efek animasi
                    console.log(response.message);  // Menampilkan pesan sukses
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });
        
        // Menanggapi event tertutupnya modal edit
        $('#editModal').on('hidden.bs.modal', function () {
            // Merefresh halaman
            location.reload();
        });

        // Menanggapi klik pada tombol delete
    $('.delete-portfolio').on('click', function () {
        var portfolioId = $(this).data('portfolio-id');
        
        // Tampilkan konfirmasi sebelum menghapus
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Menggunakan AJAX untuk menghapus data
                $.ajax({
                    url: '/portfolio/' + portfolioId,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: portfolioId
                    },
                    success: function (response) {
                        console.log(response.message);
                        // Tampilkan notifikasi berhasil
                        Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                        // Muat ulang halaman setelah penghapusan berhasil
                        location.reload();
                    },
                    error: function (error) {
                        console.log('Error:', error);
                    }
                });
            }
        });
    });
    });
</script>


  <footer>
    <center>Copyright &copy; 2023 oleh Jayfline Hutagalung.</center>
  </footer>
  <script src="{{asset('styles/js/myjs.js')}}"></script>
  </div>
</body>

</html>