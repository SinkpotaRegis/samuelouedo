@extends('Back.Template')
@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('back.getepreuve')}}">
                <i class="bi bi-grid"></i>
                <span>Banque d'Epreuve</span>
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
            <a class="nav-link collapsed" href="#">
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
                                        @foreach ($grades as $grade)
                                        <li><a class="dropdown-item" href="#">{{$grade->libelle}}</a></li>
                                        @endforeach

                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Banque d'Epreuve <span></span></h5>
                                    <div class="nouveau my-2">
                                        <a href="#"  data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                                            <i class="bi bi-plus-circle-fill text-success"></i><span >Ajouter</span>
                                        </a>
                                        <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                
                                                <div class="modal-header ">
                                                  <h5 class="modal-title mx-auto">Insérez une épreuve</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data" action="{{route('back.postepreuve')}}" novalidate>
                                                        @csrf
                                                        <div class="col-md-6">
                                                          <label for="validationCustom01" class="form-label">Titre</label>
                                                          <input type="text" name="titre" class="form-control" id="validationCustom01" placeholder="John" required>
                                                          <div class="valid-feedback">
                                                            Looks good!
                                                          </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-md-6">
                                                            <label for="validationCustom04" class="form-label">Grade</label>
                                                            <select class="form-select" name="id_grade" id="validationCustom04" required>
                                                              <option selected disabled value="">Choisir le grade</option>
                                                              @foreach ($grades as $values)
                                                              <option value="{{$values->id}}" >{{$values->libelle}}</option>
                                                              @endforeach
                                                            </select>
                                                            <div class="invalid-feedback">
                                                              Please select a valid state.
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label for="validationCustom02" class="form-label">Epreuve</label>
                                                            <input type="file" name="epreuve" class="form-control" id="validationCustom02" required>
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
                                    

                                    <div class="container py-4">
                                        <h2 class="text-center mb-4">Liste des épreuves</h2>
                                        <div class="row row-cols-1 row-cols-md-3 g-3">
                                            @foreach($NosEpreuves as $epreuve)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $epreuve->titre }}</h5>
                                                            @if(file_exists(public_path('storage/' . $epreuve->epeuve)))
                                                                <div class="text-center mb-2">
                                                                    <img src="{{ asset('assets/pdf/pdf.png') }}" alt="Logo PDF" width="50"> <br>
                                                                    <a href="{{ asset('storage/' . $epreuve->epreuve) }}" download="{{ $epreuve->titre }}" class="text-decoration-none text-primary ms-2">
                                                                        <i class="bi bi-cloud-download"></i>Télécharger 
                                                                    </a> <br>
                                                                    <a href="{{ asset('storage/' . $epreuve->epreuve) }}" target="_blank" class="text-decoration-none text-primary ms-2">
                                                                        <i class="bi bi-box-arrow-up-right"></i>  Ouvrir
                                                                    </a>
                                                                </div>
                                                            @else
                                                                <p>Aucun fichier PDF associé</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    

                                                    
                                                    {{-- <div class="modal fade" id="disablebackdrop1" tabindex="-1" data-bs-backdrop="false">
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
                                                    </div> --}}
                           
           
        </section>
@endsection
<script>
    function soumettre(){
        document.getElementById('pdfForm').submit();
    }
</script>
