<?php
require('inc/essentials.php'); 
 adminlogincheck();
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Panel-Settings</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

<?php require('inc/headeradmin.php'); ?>

<div class="container-fluid" id="maincontent">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">SETTINGS</h3>

            <!-- general section  -->

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#generalsec">
                        <i class="bi bi-pencil-square"></i> Edit</button>
                    </div>
                  
                    <h6 class="card-subtitle mb-1 fw-bold">Website Title</h6>
                    <p class="card-text" id="web_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id="web_aboutt"></p>
                    
                </div>
            </div>

            <!--general section Modal -->
    <div class="modal fade" id="generalsec" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="generalsform">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >General Settings </h5>
                    
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Website Title</label>
                        <input type="text" name="web_titlename"  id="web_title_inp" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">About Us</label>
                        <textarea class="form-control shadow-none" style="resize: none;" name="web_aboutname"  id="web_about_inp" rows="6" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  text-secondary shadow-none" onclick="web_titlename.value= generaldata.web_title , web_aboutname.value= generaldata.web_about" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" data-bs-dismiss="modal" onclick="" class="btn customcolor text-white shadow-none">Save</button>
                </div>
                </div>
            </form>
        </div>
    </div>
                <!--SHutdown -->
            <div class="card card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shut-Down Website</h5>
                        <div class="form-check form-switch">
                            <form >
                                    <input onchange="updt_shutdown(this.value)" class="form-check-input" id="shutdown" type="checkbox">
                            </form>
                        
                        </div>
                        
                    </div>
                 <p class="card-text">No Customers is allowed to make bookings or payments, it is on</p>
                    
                </div>
            </div>
  <!--Contact section -->
  <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Contacts Settings</h5>
                        <button type="button" class="btn btn-dark btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#contactsec">
                        <i class="bi bi-pencil-square"></i> Edit</button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                <p class="card-text" id="address"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"></p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">Phone Number</h6>
                                <p class="card-text mb-1"><i class="bi bi-telephone-inbound-fill"></i>
                                <span id="pn1"></span>
                                </p>
                                    <p class="card-text"><i class="bi bi-telephone-inbound-fill"></i>
                                    <span id="pn2"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                <p class="card-text" id="email"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                    <h6 class="card-subtitle mb-3 fw-bold">Social Links</h6>
                                    <p class="card-text mb-1">
                                    <i class="bi bi-twitter-x me-1"></i>
                                    <span id="tw"></span>
                                    </p>
                                        <p class="card-text  mb-1">
                                        <i class="bi bi-facebook me-1"></i> 
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-instagram me-1"></i> 
                                        <span id="insta"></span>
                                    </p>
                            </div>
                            <div class="mb-4">
                                    <h6 class="card-subtitle mb-3 fw-bold">iframe</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                            </div>

                        </div>
                        
                    </div>

            
                    
                </div>
            </div>
<!-- end  -->

      <!--contact section Modal -->
      <div class="modal fade" id="contactsec" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="contactsform">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Contacts Settings </h5>
                    
                </div>
                <div class="modal-body">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Address</label>
                                    <input type="text" name="address"  id="address_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Google Map link</label>
                                    <input type="text" name="gmap"  id="gmap_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Phone Numbers (with country code)</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-telephone-inbound-fill"></i></span>
                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-telephone-inbound-fill"></i></span>
                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none" >
                                    </div>
                                </div> 
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Email</label>
                                    <input type="email" name="email"  id="email_inp" class="form-control shadow-none" required>
                                </div>                            
                            </div>
                            <div class="col-md-6">
                                    <div class="mb-3">
                                            <label class="form-label fw-bold">Social Links</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-twitter-x me-1"></i></span>
                                                <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-facebook me-1"></i></span>
                                                <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" >
                                            </div>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text"><i class="bi bi-instagram me-1"></i></span>
                                                <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" >
                                            </div>
                                        </div> 
                                        <div class="mb-3">
                                                <label class="form-label fw-bold">iFrame Src</label>
                                                <input type="text" name="iframe"  id="iframe_inp" class="form-control shadow-none" required>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  text-secondary shadow-none" onclick="contacts_inp(contactdata)" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" data-bs-dismiss="modal" onclick="" class="btn customcolor text-white shadow-none">Save</button>
                </div>
                </div>
            </form>
        </div>
    </div>



        <!-- mgmt team section  -->

        <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Management Teams</h5>
                        <button type="button" class="btn btn-dark btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#teamsec">
                        <i class="bi bi-plus-square me-1"></i>   Add</button>
                    </div>
                    <div class="row" id="team data">
                        
                    </div>
                </div>
            </div>
           <!--mgmt team Modal -->
           <div class="modal fade" id="teamsec" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="teamsform">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Add Team Member </h5>
                    
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" name="member_name"  id="member_name_inp" class="form-control shadow-none" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Picture</label>
                        <input type="file" name="member_picture"  id="member_picture_inp" accept=".jpg, .png , .webp , .jpeg" class="form-control shadow-none" required>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  text-secondary shadow-none" onclick="" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" data-bs-dismiss="modal" onclick="" class="btn customcolor text-white shadow-none">Save</button>
                </div>
                </div>
            </form>
        </div>
    </div>

        </div>
    </div>
</div>


<?php require('inc/scripts.php'); ?>
<script>
    // ajax code 
    let generaldata , contactdata;
    let generalsform = document.getElementById('generalsform');
    let web_title_inp = document.getElementById('web_title_inp');
    let web_about_inp= document.getElementById('web_about_inp');
    let contactsform = document.getElementById('contactsform');

    let teamsform = document.getElementById('teamsform');
     let member_name_inp = document.getElementById('member_name_inp');
    let member_picture_inp= document.getElementById('member_picture_inp');

    function get_general(){
            let web_title = document.getElementById('web_title');
            let web_aboutz= document.getElementById('web_aboutt');

            let shutdowntoggle =  document.getElementById('shutdown');


            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload= function () {
                generaldata= JSON.parse(this.responseText);
               
                web_title.innerText = generaldata.web_title;
                web_aboutz.innerText = generaldata.web_about;

                web_title_inp.value = generaldata.web_title;
                web_about_inp.value = generaldata.web_about;


                if (generaldata.shutdown == 0) {
                    shutdowntoggle.checked= false;
                    shutdowntoggle.value= 0;
                    
                }
                else{
                    shutdowntoggle.checked= true;
                    shutdowntoggle.value= 1;
                }
               
            }

            xhr.send('get_general');
}

generalsform.addEventListener('submit', function(e){
    e.preventDefault();
    updt_general(web_title_inp.value,web_about_inp.value);
})

function updt_general(sitetitleval,siteaboutval){

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //bydefaultheader of form if post is used

            xhr.onload= function () {

                
                var myModal = document.getElementById('generalsec');
                var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
                modal.hide(); 
            
                
                if (this.responseText == 1) {
                    alert('success', 'Changes Saved');
                    get_general();
                }
                else{
                    alert('error', 'No Changes Made!');
                }

            }

            xhr.send('web_title='+sitetitleval+'&web_about='+siteaboutval+'&updt_general');

}

    function updt_shutdown(val){

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //bydefaultheader of form if post is used

            xhr.onload= function () {

                if (this.responseText == 1 && generaldata.shutdown==0) {
                    alert('success', 'Site has been Shutdown!');
                }
                else{
                    alert('success', 'Shutdown mode OFF!');
                }
                get_general();
            
            }

            xhr.send('updt_shutdown='+val);

    }

    function get_contacts(){
        
            let contact_p_id = ['address','gmap', 'pn1' , 'pn2', 'email' , 'tw' ,'fb' , 'insta'];   
            let iframe = document.getElementById('iframe');     

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload= function () {
                contactdata= JSON.parse(this.responseText);
                contactdata= Object.values(contactdata); 

                for (let i = 0; i < contact_p_id.length; i++) {
                    document.getElementById(contact_p_id[i]).innerText=contactdata[i+1]; 
                    
                }
                iframe.src = contactdata[9];
                contacts_inp(contactdata);
            }

            xhr.send('get_contacts');
}
    
function contacts_inp(data)
    {
        let contact_inp_id = ['address_inp','gmap_inp', 'pn1_inp' , 'pn2_inp', 'email_inp' , 'tw_inp' ,'fb_inp' , 'insta_inp' , 'iframe_inp'];  
        for ( i = 0; i < contact_inp_id.length; i++) {
                        document.getElementById(contact_inp_id[i]).value=data[i+1];     
                    }

 }
contactsform.addEventListener('submit', function(e){
    e.preventDefault();
    updt_contact();
})

function updt_contact(){
    let index = ['address','gmap', 'pn1' , 'pn2', 'email' , 'tw' ,'fb' , 'insta' , 'iframe']; 
    let contact_inp_id = ['address_inp','gmap_inp', 'pn1_inp' , 'pn2_inp', 'email_inp' , 'tw_inp' ,'fb_inp' , 'insta_inp' , 'iframe_inp'];  
    let data_str ="";
    for (let i = 0; i < index.length; i++) {
        data_str += index[i] + "=" + document.getElementById(contact_inp_id[i]).value +'&';
  }  
    data_str += "updt_contact";

            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //bydefaultheader of form if post is used

            xhr.onload= function () {

                if (this.responseText == 1) {
                    alert('success', 'Changes Saved');
                    get_contacts();
                }
                else{
                    alert('error', 'No Changes Made!');
                
                }

            }

            xhr.send(data_str);
}


teamsform.addEventListener('submit', function(e){
    e.preventDefault();
    add_member();
})

function add_member()
{
    let data = new FormData();
    data.append('name',member_name_inp.value);
    data.append('picture',member_picture_inp.files[0]);
    data.append('add_member','');

    
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/setting_crud.php",true);

            xhr.onload= function () {

                
                // var myModal = document.getElementById('generalsec');
                // var modal = bootstrap.Modal.getInstance(myModal); // Returns a Bootstrap modal instance
                // modal.hide(); 
            
                
                // if (this.responseText == 1) {
                //     alert('success', 'Changes Saved');
                //     get_general();
                // }
                // else{
                //     alert('error', 'No Changes Made!');
                // }
             console.log(this.responseText);
            }

            xhr.send(data);
}

//till vid 40.13 done---------------------------------------------------------

window.onload = function(){
    get_general();
    get_contacts();
}
</script>
</body>
</html>