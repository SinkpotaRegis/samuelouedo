@extends('Back.Template')
@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="/back">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link collpased" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Acteurs</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/samuel" >
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
          <a class="nav-link " data-bs-target="#galerie-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Galerie</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="galerie-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="/banque-epreuve" class="active">
                      <i class="bi bi-circle"></i><span>Banque d'épreuves</span>
                  </a>
              </li>
              <li>
                  <a href="/stock-photo">
                      <i class="bi bi-circle"></i><span>Stock de photos</span>
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
    <section class="section dashboard">
            <div class="row">
 
                <div class="col-lg-12">
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto top-selling">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Grades</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Premier servant</a></li>
                                        <li><a class="dropdown-item" href="#">Deuxième</a></li>
                                        <li><a class="dropdown-item" href="#">Troisième</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Grade <span>| Premier servant</span></h5>
                                    <div class="nouveau my-2">
                                        <a href="#"  data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                                            <i class="bi bi-plus-circle-fill text-success"></i><span >Ajouter</span>
                                        </a>
                                        <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                
                                                <div class="modal-header ">
                                                  <h5 class="modal-title mx-auto">Enregistrement d'une épreuve</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="row g-3 needs-validation" novalidate>
                                                        <div class="col-md-6">
                                                          <label for="validationCustom01" class="form-label">Titre</label>
                                                          <input type="text" class="form-control" id="validationCustom01" value="John" required>
                                                          <div class="valid-feedback">
                                                            Looks good!
                                                          </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <label for="validationCustom04" class="form-label">Grade</label>
                                                            <select class="form-select" id="validationCustom04" required>
                                                              <option selected disabled value="">Choisir le grade</option>
                                                              <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                              Please select a valid state.
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label for="validationCustom02" class="form-label">Description</label>
                                                            <input type="text" class="form-control" id="validationCustom02" value="Doe" required>
                                                            <div class="valid-feedback">
                                                              Looks good!
                                                            </div>
                                                          </div>
                                                        <div class="col-12 text-center">
                                                          <button class="btn btn-primary" type="submit">Enregistrer</button>
                                                          <button type="bouton" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                        </div>
                                                    </form>                                                           
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <table class="table table-borderless datatable table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Epreuve</th>
                                                <th scope="col">Titre</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Grade</th>
                                                <th scope="col">Détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <form action="/upload" method="POST" enctype="multipart/form-data" id="pdfForm">
                                                        @csrf 
                                                        <div class="input-group">
                                                            <input type="file" name="pdf" id="pdf" class="d-none" onchange="soumettre()" accept="pdf/*">
                                                            <label for="pdf" class="btn  btn-sm" title="Upload new pdf">
                                                                <img src="assets/img/pdf_icon.png" alt="">
                                                            </label>
                                                        </div>
                                                    </form>
                                                </th>
                                                
                                                <td>Brandon Jacob</td>
                                                <td class="text-primary">St Jean</td>
                                                <td>Premier Servant</td>
                                                <td >
                                                    <div class="text-center ">
                                                        <a href="#" class="text-primary mx-auto" data-bs-toggle="modal" data-bs-target="#disablebackdrop1"><i class="bi bi-pencil-square bi-2x"></i></a>
                                                        <a href="#" class="text-danger mx-auto"><i class="bi bi-trash-fill bi-2x"></i></a>
                                                    </div>
                                                    
                                                    <div class="modal fade" id="disablebackdrop1" tabindex="-1" data-bs-backdrop="false">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            
                                                            <div class="modal-header ">
                                                              <h5 class="modal-title mx-auto">Modification d'une épreuve</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="row g-3 needs-validation" novalidate>
                                                                    <div class="col-md-6">
                                                                      <label for="validationCustom01" class="form-label">Titre</label>
                                                                      <input type="text" class="form-control" id="validationCustom01" value="John" required>
                                                                      <div class="valid-feedback">
                                                                        Looks good!
                                                                      </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="col-md-6">
                                                                        <label for="validationCustom04" class="form-label">Grade</label>
                                                                        <select class="form-select" id="validationCustom04" required>
                                                                          <option selected disabled value="">Choisir le grade</option>
                                                                          <option>...</option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                          Please select a valid state.
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <label for="validationCustom02" class="form-label">Description</label>
                                                                        <input type="text" class="form-control" id="validationCustom02" value="Doe" required>
                                                                        <div class="valid-feedback">
                                                                          Looks good!
                                                                        </div>
                                                                      </div>
                                                                    <div class="col-12 text-center">
                                                                      <button class="btn btn-primary" type="submit">Enregistrer</button>
                                                                      <button type="bouton" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                    </div>
                                                                </form>                                                         
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

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
        document.getElementById('pdfForm').submit();
    }
</script>
