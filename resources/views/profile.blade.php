@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('profile') }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->role_id == 5)
                    <form action="users" method="POST">
                    <label for= "Prenom"> Image : </label>
                    <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                    <hr>
                    <label for= "Prenom"> NOM : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Prenom : </label>
                    <input type="text" id="name" name="name">

                    <hr>
                    <label for= "Prenom"> N CIN  : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Email : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Date de naissance  : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    
                    <label for= "Prenom"> Telephone : </label>
                    <input type="text" id="name" name="name">
                   
                 
                    
                    
                    @else
                    <form action="users" method="POST">
                    <label for= "Prenom"> Image : </label>
                    <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                    <hr>
                    <label for= "Prenom"> Nom : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Prenom : </label>
                    <input type="text" id="name" name="name">

                    <hr>
                    <label for= "Prenom"> N CIN  : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Email : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Date de naissance  : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Date de recrutement :  </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Telephone : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> N DRPP : </label>
                    <input type="text" id="name" name="name">
                    <hr>
                    <label for= "Prenom"> Prof appartenant a l'ensa   :</label>
                    <input type="checkbox" id="scales" name="scales"
         checked>
                    <hr>
                    <label for="avatar">Dossier scientifique:</label>
                    <input type="file" id="docpicker"
  accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    <hr>
                    <label for="avatar">Dossier pedagogique:</label>
                    <input type="file" id="docpicker"
  accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    <hr>
                    <label for="avatar"> Dossier administratif:</label>
                    <input type="file" id="docpicker"
  accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    


                    @endif
                    
             
                </div>
                <button  type="submit" class="btn btn-success">Updateprofile</button>
                
               
                   

                    
            </div>
        </div>
    </div>
</div>
@endsection