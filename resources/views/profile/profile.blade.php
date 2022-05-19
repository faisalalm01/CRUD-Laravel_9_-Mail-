@extends('layaout.app')
<body>
    <div class="container mt-5">
            <button type="button" class="btn btn-warning shadow w-25" data-toggle="modal" data-target="#modalTambahBarang">PROFILE</button>
            
            <div class="modal fade" id="modalTambahBarang" tabindex="-1" aria-labelledby="modalTambahBarang" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
        </div>
        <div class="modal-body">
        <!--PROFILE-->
            <form action="">
                <div class="card mt-5 shadow p-4">
                     <div class="card-body">
                          <div class="row">
                                 <div class="col-12 col-sm-8 col-md-8">
                                     <div class="row ">
                                          <div class="col-4">
                                              <label class="text-muted mb-2">Name</label>
                                          </div>
                                          <div class="col-md-8">
                                               <input type="text" class="form-control text-muted" id ="nama" name ="nama" value="Faisal Ali Muhamad" disabled>
                                          </div>
                                      </div>
                                      <div class="row mt-3">
                                          <div class="col-4">
                                              <label class="text-muted mb-2">Status</label>
                                          </div>
                                          <div class="col-8">
                                              <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="College student" disabled>
                                          </div>
                                      </div>
                                     
                                      <div class="row mt-3">
                                          <div class="col-4">
                                              <label class="text-muted mb-2">Universitas</label>
                                          </div>
                                          <div class="col-8 ">
                                               <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="Politeknik PHB"  disabled>
                                          </div>
                                      </div>
                                 </div>
                             </div>
                             <div class="card-footer row mt-4 text-center container">
                               <div class="col-md-12 col-sm-8 col-4">
                                 <p class="fs-6 "><p>FOLLOW ME ON :</p></p>
                               </div>
                               <div class="insta col-md-3 col-sm-3 col-4 mt-3">
                                  <a href="https://www.instagram.com/faizalfalakh" class=" text-decoration-none text-black"><i class="bi bi-instagram ">github</i></a>
                               </div>
                               <div class="github col-md-3 col-sm-3 col-4 mt-3">
                                  <a href="https://www.github.com/Faizalilham" class=" text-decoration-none text-black"><i class="bi bi-github ">instagram</i></a>
                               </div>
      
                             </div>
                     </div>
                </div>
            </form>
        <!--END PROFILE-->
        </div>
    </div>
</div>
</div>
</div>

</body>