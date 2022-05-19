@extends('layaout.app');

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('mail.update', $mail->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">NO SURAT : </label>
                            <input type="number" class="form-control @error('nosurat') is-invalid @enderror" name="nosurat" value="{{ old('nosurat', $mail->nosurat) }}" placeholder="Masukkan No Surat Surat">
                        
                            <!-- error message untuk title -->
                            @error('nosurat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">TITLE : </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $mail->title) }}" placeholder="Masukkan Judul Surat">
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL</label>
                                <input type="text" id="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date', $mail->date) }}" placeholder="Masukkan Tanggal Surat">
                                @error('date')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {            
        
        $('#date').datepicker({                      
            
            format: 'yyyy/mm/dd',
            
            autoclose: true,
            
        }); 
        
    });
    
    </script>
    <script>
    CKEDITOR.replace( 'content' );
    </script>