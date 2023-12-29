@extends('Back.Template')
@section('sidebar')


    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="/back">
                <i class="bi bi-church"></i>
                <span>Paroisse</span>
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
          <a class="nav-link collapsed" data-bs-target="#galerie-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Galerie</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="galerie-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="/banque-epreuve">
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
            <a class="nav-link" href="/paroisse">
                <i class="bi bi-envelope"></i>
                <span>Paroisse</span>
            </a>
        </li>
    </ul>
@endsection
@section('contenu')
    <section class="section dashboard">
      <!--  Affiche le message d'enregistrement -->
@if (session('status'))
<div class="bg-green-200 text-green-800 p-4 mb-4 rounded-md">
    {{ session('status') }}
</div>
@endif
            <div class="row">
 
                <div class="col-lg-12">
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto top-selling">

                                <div class="card-body">
                                    <h5 class="card-title">Paroisses <span>| Vicariat</span></h5>
                                    <div class="nouveau my-2">
                                        <a href="#"  data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                                            <i class="bi bi-plus-circle-fill text-success"></i><span >Ajouter</span>
                                        </a>
                                        <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                
                                                <div class="modal-header ">
                                                  <h5 class="modal-title mx-auto">Enregistrement d'une Paroisse</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data" method="POST" action="{{route('back.paroisse')}}">
                                                      @csrf
                                                        <div class="col-md-12">
                                                          <label for="validationCustom01" class="form-label">Nomination</label>
                                                          <input type="text" class="form-control" name="nom" id="validationCustom01" placeholder="Saint John" required>
                                                    <form class="row g-3 needs-validation" novalidate>
                                                        <div class="col-md-12">
                                                            <label for="validationCustom01" class="form-label">Détails(description & localisation)</label>
                                                            <textarea name="localisation" id="validationCustom01" class="form-control" cols="30" rows="3" required></textarea>
                                                            <div class="valid-feedback">
                                                              Looks good!
                                                            </div>
                                                          </div>
                                                          <div class="col-md-12">
                                                            <label for="validationCustom01" class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="email" id="validationCustom01" placeholder="example@gmail.com" required>
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
                                </div>
                                    
                                    
                                    <table class="table table-borderless datatable table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nomination</th>
                                                <th scope="col">Localisation</th>
                                                <th scope="col">email</th>
                                                <th scope="col">Détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($paroisses as $item)
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->nom}}</td>
                                                <td >{{$item->localisation}}</td>
                                                <td class="text-primary">{{$item->email}}</td>
                                                
                                                <td>
                                                  <div class="text-center">
                                                      <a href="#" class="text-primary mx-auto" data-bs-toggle="modal" data-bs-target="#disablebackdrop1">
                                                          <i class="bi bi-pencil-square bi-2x"></i>
                                                      </a>
                                                      <a href="#" class="text-danger mx-auto">
                                                          <i class="bi bi-trash-fill bi-2x"></i>
                                                      </a>
                                                  </div>
                                              </td>
                                              </tr>
                                                @endforeach

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