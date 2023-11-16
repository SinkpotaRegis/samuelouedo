@extends('Back.Template')
@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="back">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Acteurs</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/samuel">
                        <i class="bi bi-circle"></i><span>Samuels</span>
                    </a>
                </li>
                <li>
                    <a href="/animateur">
                        <i class="bi bi-circle"></i><span>Animateurs</span>
                    </a>
                </li>
            
            </ul>
        </li>
        

        

        <li class="nav-item">
            <a class="nav-link collapsed" href="/grade">
                <i class="bi bi-person"></i>
                <span>Grades</span>
            </a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link collapsed" href="/poste">
                <i class="bi bi-question-circle"></i>
                <span>Poste</span>
            </a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link collapsed" href="/paroisse">
                <i class="bi bi-envelope"></i>
                <span>Paroisse</span>
            </a>
        </li>
    </ul>
@endsection
@section('contenu')
<section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <form action="/upload" method="POST" enctype="multipart/form-data" id="imageForm">
                @csrf 
                <div class="input-group">
                    <input type="file" name="image" id="image" class="d-none" onchange="soumettre()" accept="image/*">
                    <label for="image" class="btn  btn-sm" title="Upload new profile image">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    </label>
                </div>
            </form>
            <h2>KOTANMI Florian</h2>
            <h3>Animateur St Jean</h3>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editer Profil</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer de mot de passe</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
                <h5 class="card-title">Détails</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nom & Prénoms</div>
                  <div class="col-lg-9 col-md-8">KOTANMI Florian</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Poste</div>
                  <div class="col-lg-9 col-md-8">Premier Animateur</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Paroisse</div>
                  <div class="col-lg-9 col-md-8">St Jean</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Contact</div>
                  <div class="col-lg-9 col-md-8">+(229) 52747455</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">E-mail</div>
                  <div class="col-lg-9 col-md-8">amedeflorian@gmail.com</div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                
                <form>
                  

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="KOTANMI">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Prénoms</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="Florian">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Paroisse</label>
                    <div class="col-md-8 col-lg-9">
                        <select name="paroisse" id="" class="form-control">
                            <option value="">St Jean</option>
                            <option value="">St Mathieu</option>
                            <option value="">Bon Pasteur</option>
                        </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Poste</label>
                    <div class="col-md-8 col-lg-9">
                        <select name="paroisse" id="" class="form-control">
                            <option value="">Premier animateur</option>
                            <option value="">Premier Animateur</option>
                        </select>
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="Phone" value="+(229) 52747455">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="amedeflorian@gmail.com">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
                </form>

              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                
                <form>

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Changer</button>
                  </div>
                </form>

              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
<script>
    function soumettre(){
        document.getElementById('imageForm').submit();
    }
</script>