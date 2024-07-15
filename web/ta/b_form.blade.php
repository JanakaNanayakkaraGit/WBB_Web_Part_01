@extends('welfareta_master')

@section('content')
<div class="main" >

    <div class="container dform" style="padding-top: 3%;">
        <form  id="data_form" >
            @csrf
            <div style="padding-top: 5%;">

                <fieldset>
                    <div class="row">
                        <div class="col-sm-3 col-md-6 col-lg-4">
                            <h2>தனிப்பட்ட தகவல்</h2>
                        </div>
                        <div class="col-sm-9 col-md-6 col-lg-8">
                            <button type="button" class="btn btn-warning pull-right" ><a href="https://wbb.gov.lk/test/en/Documents/Dowunload/Benefisary_Form.pdf.pdf" style="text-decoration: none;">Download Form</a></button>
                        </div>


                    </div>
                    <p class="desc">உங்கள் தகவலை உள்ளிட்டு அடுத்த படிக்குச் செல்லவும், அதனால் நாங்கள் உங்கள் கணக்கை உருவாக்க முடியும்</p>
                    <div class="fieldset-content">
                        <div class="form-row">
                            <label class="form-label">விண்ணப்பதாரர் முழு பெயர்</label>

                                <div class="form-group">
                                    <input type="text" name="full_name" id="full_name" />
                                    <span class="text-input">கடைசி பெயரில் சேர்க்கவும்*</span>
                                </div>

                        </div>
                        <label for="email" class="form-label">முகவரி</label>
                        <div class="form-group">

                            <input type="text" name="address" id="address" />
                            <span class="text-input">Example  :<span>B47,lmkkamam,Ampara District,Sri Lanka </span></span>
                        </div>
                        <label for="phone" class="form-label">தொலைபேசி</label>
                        <div class="form-group mt-2 d-inline-block">
                            <span class="border-end country-code px-2">+94</span>
                            <input type="tel" name="phone" id="mobile_code" pattern="07[1,2,5,6,7,8][0-9]{7}" />
                            <style>
                              .form-group {
                               border: 1px solid #ced4da;
                               padding: 5px;
                               border-radius: 6px;
                               width: auto;
                              }
                              .form-group:focus {
                               color: #212529;
                               background-color: #fff;
                               border-color: #86b7fe;
                               outline: 0;
                               box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
                              }
                              .form-group input {
                               display: inline-block;
                               width: auto;
                               border: none;
                              }
                             .form-group input:focus {
                              box-shadow: none;
                             }
                           </style>
                        </div>
                        <label for="ssn" class="form-label">தேசிய அடையாள அட்டை</label>
                        <div class="form-group">
                            <input id='nic' type="text" name="nic" placeholder="Enter your NIC number" onchange="doCalculate(this);" required>

                              <p id='result'></p>
                        </div>
                        <div id="gendersection">பாலினம் <span id='gender'></div>

                        <div id="dobsection">பிறந்த தேதி <span id='dob'></div>
                    <div class="row" style="padding-top: 3%;">
                        <div class="form-date">
                            <label for="birth_date" class="form-label">பிறந்த தேதி</label>

                            <div class="mb-10">

                                <input class="form-control" name="b_date" type="date" id="dateofbirth" />
                            </div>
                        </div>
                    </div>



                                <div class="row" style="padding-top: 3%;">
                                    <div class="col">
                                        <label for="birth_date" class="form-label">மாகாணம்</label>
                                        <select name="province" id="province">
                                            <option value="">--ஒரு மாகாணத்தைத் தேர்ந்தெடுக்கவும்--</option>
                                            <option value="ws">WESTERN PROVINCE</option>
                                            <option value="es">EASTERN PROVINCE</option>
                                            <option value="cp">CENTRAL PROVINCE</option>
                                            <option value="sp">SOUTHERN PROVINCE</option>
                                            <option value="sgp">SABARAGAMUWA PROVINCE</option>
                                            <option value="uva">UVA PROVINCE</option>
                                            <option value="nwp">NORTH WESTERN PROVINCE</option>
                                            <option value="ncp">NORTH CENTRAL PROVINCE</option>
                                            <option value="np">NORTHERN PROVINCE</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <label for="birth_date" class="form-label">மாவட்டம்</label>
                                        <!--- Sri Lanka states -->
                                       <select id="country-state" name="district">
                                        <option value="">ஒரு மாநிலத்தைத் தேர்ந்தெடுக்கவும்</option>
                                        <option value="52">Ampara District</option>
                                        <option value="71">Anuradhapura District</option>
                                        <option value="81">Badulla District</option>
                                        <option value="51">Batticaloa District</option>
                                        <option value="11">Colombo District</option>
                                        <option value="31">Galle District</option>
                                        <option value="12">Gampaha District</option>
                                        <option value="33">Hambantota District</option>
                                        <option value="41">Jaffna District</option>
                                        <option value="13">Kalutara District</option>
                                        <option value="21">Kandy District</option>
                                        <option value="92">Kegalle District</option>
                                        <option value="42">Kilinochchi District</option>
                                        <option value="43">Mannar District</option>
                                        <option value="22">Matale District</option>
                                        <option value="32">Matara District</option>
                                        <option value="82">Monaragala District</option>
                                        <option value="45">Mullaitivu District</option>
                                        <option value="7">North Central Province</option>
                                        <option value="6">North Western Province</option>
                                        <option value="23">Nuwara Eliya District</option>
                                        <option value="72">Polonnaruwa District</option>
                                        <option value="62">Puttalam District</option>
                                        <option value="91">Ratnapura district</option>
                                        <option value="53">Trincomalee District</option>
                                        <option value="44">Vavuniya District</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="birth_date" class="form-label">பிராந்திய செயலக பிரிவு</label>
                                        <input type="text" name="field_division">
                                    </div>

                                    <div class="row" style="padding-top: 3%;">
                                        <div class="col-8">
                                            <label for="birth_date" class="form-label">கிராம அலுவலர் பிரிவு</label>
                                            <input type="text" name="village_officer">
                                        </div>
                                        <div class="col-2">
                                            <label for="birth_date" class="form-label">செழிப்பு மண்டலம்</label>
                                            <input type="text" name="prosperity_zone">
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 3%; ">
                                    <label for="proj" class="form-label">நீங்கள் தற்போது ஏதேனும் நலத்திட்டத்தின் மூலம் பயனடைகிறீர்கள் என்றால், நலத்திட்டத்தின் பெயர்.</label>
                                    <div class="col-10">

                                        <input type="text" name="benefit">

                                    </div>
                                    <div class="col">

                                        <input type="text" placeholder="விலை" name="value">
                                    </div>
                                </div>

                                <div class="row" style="padding-top: 3%; ">
                                    <label for="proj" class="form-label">குடும்ப உறுப்பினர்களின் மொத்த எண்ணிக்கை.</label>
                                    <div class="col-4">

                                        <input type="number" name="total_member">

                                    </div>

                                </div>

                                <div class="row" style="padding-top: 3%; ">
                                    <label for="proj" class="form-label">நீங்கள் ஏதேனும் நலத்திட்டத்தின் காத்திருப்போர் பட்டியலில் இருந்தால், அந்த திட்டங்களின் பெயர்.</label>
                                    <div class="col">

                                        <input type="text" name="suggest_one">

                                    </div>
                                    <div class="col">

                                        <input type="text"  name="suggest_two">
                                    </div>
                                </div>

                                <div class="row" style="padding-top: 3%; ">
                                    <label for="proj" class="form-label">நீங்கள் புதிய விண்ணப்பதாரரா?</label>
                                    <div class="col" >

                                        <select name="user_check" id="user_check">
                                            <option value="">--நீங்கள் புதிய பயனரா இல்லையா--</option>
                                            <option value="1">Yes</option>
                                            <option value="0">NO</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row" style="padding-top: 3%; " id="optional_field" >
                                    <label for="proj" class="form-label">நீங்கள் புதிய விண்ணப்பதாரராக இருந்தால், நீங்கள் விண்ணப்பிக்கும் திட்டத்தின் பெயர்.</label>
                                    <div class="col">

                                        <input type="text" name="optional" id="optional">

                                    </div>

                                </div>

                                </div>

                    </div>
                </fieldset>
                <span class="text-danger" id="span-error"></span>
                <div style="padding-top: 3%;">
                <button type="button" id="add" class="btn btn-primary">சமர்ப்பிக்கவும்</button>
                </div>

            </div>
        </form>
    </div>

</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">


    function doCalculate(elm)
    {

        var nic = document.getElementById('nic').value;
        var gender = document.getElementById('gender');
        var dob = document.getElementById('dob');
        var pattern = /^([0-9]{9}[x|X|v|V]|[0-9]{12})$/;
        if (!pattern.test(nic))
        {

            gender.innerHTML = '';
            dob.innerHTML = '';
            alert('Invalid NIC number');
            return false;
        }

        var mon =
                {
                    "1": ["Jan", 31],
                    "2": ["Feb", 29],
                    "3": ["Mar", 31],
                    "4": ["Apr", 30],
                    "5": ["May", 31],
                    "6": ["Jun", 30],
                    "7": ["Jul", 31],
                    "8": ["Aug", 31],
                    "9": ["Sep", 30],
                    "10": ["Oct", 31],
                    "11": ["Nov", 30],
                    "12": ["Dec", 31]
                };
        if (nic.length >= 5)
        {
            year = "19" + nic.substr(0, 2);
            days = parseInt(nic.substr(2, 3));
            if (days > 500)
            {
                gender.innerHTML = "Female";
                days = days - 500;
            }
            else
            {
                gender.innerHTML = "Male";
            }
            var key;
            for (key in mon)
            {
                if (days > mon[key][1])
                {
                    days = days - mon[key][1];
                }
                else
                {
                    break;
                }
            }
            if (days < 10)
            {
                days = "0" + days;
            }
            var date=dob.innerHTML = mon[key][0] + ", " + days + " " + year;

        var originalDate =date;
        console.log(originalDate);

        var formatted=new Date(originalDate).toLocaleDateString('fr-CA');
        $('#dateofbirth').val(formatted);
        }
        return false;
    }

    $( document ).ready(function() {
        var formElement = document.getElementById("data_form");
formElement.style.transform = 'scale(0.9)';


        $(function() {
    $('#optional_field').hide();
    $('#user_check').change(function(){
        if($('#user_check').val() == '1') {
            $('#optional_field').show();
        } else {
            $('#optional_field').hide();
            document.getElementById("optional").value = "No";

        }
    });
});

});



let btn = document.getElementById("add");
    btn.addEventListener('click', event => {
          var create_record = $('#data_form')[0];
          var create_record_ajax = new FormData(create_record);
          $.ajax({
            type:'POST',
            url: "{{ route('ajaxaddtaform') }}",
             data: create_record_ajax,
             contentType: false,
             processData: false,
             success: (response) => {
               if (response) {
                $('#data_form')[0].reset();

                 alert('Your application submitted successfully!');
                 document.getElementById("#span-error").innerHTML="";

               }

             },
             error: function(response){
                  $('#span-error').text(response.responseJSON.message);
             }
         })
         .always(function() {

      });



     console.log("clickde");



    });

    </script>
<script src="{{ asset('assets/formcss/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/formcss/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/formcss/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
<script src="{{ asset('assets/formcss/vendor/jquery-steps/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/formcss/vendor/minimalist-picker/dobpicker.js') }}"></script>
<script src="{{ asset('assets/formcss/vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/formcss/vendor/wnumb/wNumb.js') }}"></script>
<script src="{{ asset('assets/formcss/js/main.js') }}"></script>

@endsection
