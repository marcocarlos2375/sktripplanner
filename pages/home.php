
<main>
        <div>
            <!-- DIV TABS -->


            <div class="bg-header W-100"></div>
            <br>
            <div class="w-100 ">
                <div class="container">
                    <div class="tab-content " id="myTabContent">
                        <div class="tab-pane fade show active" id="Hotels" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <!-- Hotels -->
                            <form action="" method="get">
                                <div class="search__bar__div nav-shadow pl-4 pr-4 pt-3 pb-3   bg-white rounded-10px"
                                    style="position: relative;top: -50px;">
                                    <div class="row">
                                        <div class="col-lg-3 col-input-div pr-3 border-right border-start">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="left-20 " style="position: relative;">
                                                        <center>
                                                            <img src="svg/search.svg" width="18" alt="">

                                                        </center>
                                                    </td>
                                                    <td class="col-10 left-20"
                                                        style="line-height: 8px;position: relative;">
                                                        <label for="destination">
                                                            Destination
                                                        </label>
                                                        <input type="text" name="destination" class="w-100 "
                                                            id="destination" placeholder="Destination"
                                                            value="A proximité" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div class="modal__div  p-3">
                                                <div class="modal__body bg-white">
                                                    <div class="text-center p-1 modal__header">
                                                    </div>
                                                    <div>
                                                        <div class="search__city__div">
                                                            <input type="text" class="city__input__search col-lg-12 p-3"
                                                                placeholder="Votre Destination ..." name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="modal__head p-2" style="overflow-y: scroll;">
                                                        <div class="row">
                                                            <div class="pl-3">
                                                                <small>suggestions de déstinations qui pouraient vous
                                                                    intéreser </small>
                                                            </div>

                                                            <div class="nearby-city">
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Paris</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">New york</b>
                                                                            <br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Berlin</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="modal__footer p-2 border-top">
                                                            <button
                                                                class="closeBtn btn btn-black float-right rounded"><b>Fermer</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-4 col-input-div pr-2 border-right ">
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>130 calendar</title>
                                                                    <path
                                                                        d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                                                    <circle cx="12" cy="15" r="1.5" />
                                                                    <circle cx="7" cy="15" r="1.5" />
                                                                    <circle cx="17" cy="15" r="1.5" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">
                                                                    Arrivée
                                                                </label>
                                                                <input type="text" name="départ"
                                                                    class="w-100 forms hhDate_1 " id="startDateInputs"
                                                                    readonly placeholder="Date d'arrivée"
                                                                    date-start="1">
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div class="text-center p-1 modal__header"
                                                                style="position:static;">
                                                                <!-- <h6 class="text"><b> Arrivée</b></h6>
                                                                <small class="text-muted "> Paris . 25 mars</small> -->
                                                            </div>
                                                            <div class="date">
                                                                <div id="startdatehotel" data-date="" data-date-type="1"
                                                                    data-date-starting="1"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>


                                                            <div class="modal__footer pt-2">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->

                                                </div>
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="" style="position: relative;right: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>154 arrow right</title>
                                                                    <path
                                                                        d="M23.124,9.907,19.245,6.029a1,1,0,0,0-1.414,0h0a1,1,0,0,0,0,1.414L21.386,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.447l-3.616,3.615a1,1,0,0,0,0,1.415h0a1,1,0,0,0,1.414,0l3.88-3.879A3.008,3.008,0,0,0,23.124,9.907Z" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">
                                                                    Retour
                                                                </label>
                                                                <input type="text" name="arrivee"
                                                                    class="w-100 forms hhDate_2 " id="endDateInputs"
                                                                    readonly placeholder="Date de rétour">
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3">
                                                        <div class="modal__body">

                                                            <div class="text-center p-1 modal__header">
                                                            </div>
                                                            <div class="date">
                                                                <div id="enddatehotel" data-date="" data-date-type="1"
                                                                    data-date-starting="2"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer p-2">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-input-div pr-2 border-right ">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" id="Layer_1"
                                                            data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path
                                                                d="M7.5,13A4.5,4.5,0,1,1,12,8.5,4.505,4.505,0,0,1,7.5,13Zm0-7A2.5,2.5,0,1,0,10,8.5,2.5,2.5,0,0,0,7.5,6ZM15,23v-.5a7.5,7.5,0,0,0-15,0V23a1,1,0,0,0,2,0v-.5a5.5,5.5,0,0,1,11,0V23a1,1,0,0,0,2,0Zm9-5a7,7,0,0,0-11.667-5.217,1,1,0,1,0,1.334,1.49A5,5,0,0,1,22,18a1,1,0,0,0,2,0ZM17.5,9A4.5,4.5,0,1,1,22,4.5,4.505,4.505,0,0,1,17.5,9Zm0-7A2.5,2.5,0,1,0,20,4.5,2.5,2.5,0,0,0,17.5,2Z" />
                                                        </svg>
                                                    </td>
                                                    <td class="col-11" style="line-height: 8px;">
                                                        <label for="voyageurs">
                                                            Voyageurs
                                                        </label><br>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class=" " style="width: 12px;"
                                                                        name="Voyageurs" id="voyageurs" value="1"
                                                                        readonly>
                                                                </td>
                                                                <td class="">
                                                                    <small>voyageurs</small>
                                                                </td>
                                                                <td>,</td>
                                                                <td>
                                                                    <input type="text" class=" " style="width: 12px;"
                                                                        name="Voyageurs" id="chambres" value="1"
                                                                        readonly>
                                                                </td>
                                                                <td class="">
                                                                    <small>chambre</small>
                                                                </td>

                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div>
                                                <div class="modal__div p-4">
                                                    <div class="modal__body">
                                                        <div class="text-center p-1 modal__header">
                                                        </div>
                                                        <div class="p-2">
                                                            <small>
                                                                cliquez sur le bouton + pour ajouter les chambres ou les
                                                                voyageurs et - pour les diminuer
                                                            </small>
                                                        </div>

                                                        <table>
                                                            <tr class="p-3">
                                                                <td class="p-3"><small>Voyageurs</small></td>
                                                                <td><button class="add" data-types="2">+</button></td>
                                                                <td class="p-4"><small class="addspan">1</small></td>
                                                                <td><button class="minus" data-types="2">-</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-3 col-lg-4"><small>Chambres</small></td>
                                                                <td><button class="add" data-types="1">+</button></td>
                                                                <td class="p-4"><small class="addspan">1</small></td>
                                                                <td><button class="minus" data-types="1">-</button></td>
                                                            </tr>


                                                        </table>
                                                        <br>
                                                        <div class="modal__footer p-2 border-top">
                                                            <button class="closeBtn btn btn-black float-right rounded">
                                                                <b>Fermer</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-3 display-lg border-end col-input-div">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customControlAutosizing">
                                                <label class="custom-control-label"
                                                    for="customControlAutosizing">&nbsp;&nbsp;&nbsp;<small>Je voyage
                                                        pour le Travail</small></label>
                                            </div>

                                        </div>
                                        <div class="col-lg-2 col-input-div no-border-bottom ">
                                            <button type="submit" class="btn p-2 col-lg-12 rounded-10px"
                                                style="background:#4ad395;color: #fff;"
                                                name="submit"><b>search</b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade   " id="Vols" role="tabpanel" aria-labelledby="home-tab">
                            <form action="" method="get">
                                <div class="search__bar__div nav-shadow pl-4 pr-4 pt-3 pb-3   bg-white rounded-10px"
                                    style="position: relative;top: -80px;">
                                    <div class="row">
                                        <div class="col-lg-3 col-input-div pr-3 border-right border-start">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="left-20 " style="position: relative;">
                                                        <center>
                                                            <img src="svg/search.svg" width="18" alt="">

                                                        </center>
                                                    </td>
                                                    <td class="col-10 left-20"
                                                        style="line-height: 8px;position: relative;">
                                                        <label for="destination">
                                                            Tours
                                                        </label>
                                                        <input type="text" name="destination" class="w-100 "
                                                            id="destinations" placeholder="Destination"
                                                            value="A proximité" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div class="modal__div  p-3">
                                                <div class="modal__body bg-white">
                                                    <div class="modal__head mb-2 p-2">
                                                        <div class="row">
                                                            <div class="p-3">
                                                                <small>Lorem ipsum dolor sit, amet consectetur
                                                                    adipisicing
                                                                    elit. </small>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="modal__footer p-3 border-top">
                                                            <button class="closeBtn btn btn-black float-right rounded">
                                                                <b>Fermer</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-3 col-input-div pr-3 border-right ">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="left-20 " style="position: relative;">
                                                        <center>
                                                            <img src="svg/search.svg" width="18" alt="">

                                                        </center>
                                                    </td>
                                                    <td class="col-10 left-20"
                                                        style="line-height: 8px;position: relative;">

                                                        <label>
                                                            Destination
                                                        </label>
                                                        <input type="text" name="destination" class="w-100 "
                                                            id="destination" placeholder="Destination"
                                                            value="A proximité" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div class="modal__div  p-3">
                                                <div class="modal__body bg-white">
                                                    <div>
                                                        <div class="search__city__div">
                                                            <input type="text" class="city__input__search p-4"
                                                                placeholder="Votre Destination ..." name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="modal__head mb-2 p-2" style="overflow-y: scroll;">
                                                        <div class="row">
                                                            <div class="p-3">
                                                                <small>suggestions de déstinations qui pouraient vous
                                                                    intéreser </small>
                                                            </div>
                                                            <br>
                                                            <div class="nearby-city">
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Paris</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">New york</b>
                                                                            <br>

                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Berlin</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br><br>
                                                        <div class="modal__footer p-3 border-top">
                                                            <button
                                                                class="closeBtn btn btn-black float-right rounded"><b>Fermer</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-4 col-input-div pr-2 border-right ">
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>130 calendar</title>
                                                                    <path
                                                                        d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                                                    <circle cx="12" cy="15" r="1.5" />
                                                                    <circle cx="7" cy="15" r="1.5" />
                                                                    <circle cx="17" cy="15" r="1.5" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">

                                                                    Arrivee

                                                                </label>
                                                                <input type="text" name="départ"
                                                                    class="w-100 forms hotelDate_1 " date-start="1"
                                                                    id="startDateInput" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="startdate" data-date="" data-date-type="1"
                                                                    data-date-starting="1"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->

                                                </div>
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="" style="position: relative;right: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>154 arrow right</title>
                                                                    <path
                                                                        d="M23.124,9.907,19.245,6.029a1,1,0,0,0-1.414,0h0a1,1,0,0,0,0,1.414L21.386,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.447l-3.616,3.615a1,1,0,0,0,0,1.415h0a1,1,0,0,0,1.414,0l3.88-3.879A3.008,3.008,0,0,0,23.124,9.907Z" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">
                                                                    Retour
                                                                </label>
                                                                <input type="text" name="arrivee"
                                                                    class="w-100 forms hotelDate_2 " id="endDateInput"
                                                                    value="ven 27 Dec 2007" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="enddate" data-date="" data-date-type="1"
                                                                    data-date-starting="2"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer p-2">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-3 display-lg border-end col-input-div">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customControlAutosizing">
                                                <label class="custom-control-label"
                                                    for="customControlAutosizing">&nbsp;&nbsp;&nbsp;<small>Je voyage
                                                        pour le Travail</small></label>
                                            </div>

                                        </div>
                                        <div class="col-lg-2 col-input-div no-border-bottom ">
                                            <button type="submit" class="btn p-2 col-lg-12 rounded-10px"
                                                style="background:#4ad395;color: #fff;"
                                                name="submit"><b>search</b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="Locations_saisoniere" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <form action="" method="get">
                                <div class="search__bar__div nav-shadow pl-4 pr-4 pt-3 pb-3   bg-white rounded-10px"
                                    style="position: relative;top: -50px;">
                                    <div class="row">
                                        <div class="col-lg-3 col-input-div pr-3 border-right border-start">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="left-20 " style="position: relative;">
                                                        <center>
                                                            <img src="svg/search.svg" width="18" alt="">

                                                        </center>
                                                    </td>
                                                    <td class="col-10 left-20"
                                                        style="line-height: 8px;position: relative;">
                                                        <label for="destination">
                                                            Destination
                                                        </label>
                                                        <input type="text" name="destination" class="w-100 "
                                                            id="destination" placeholder="Destination"
                                                            value="A proximité" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div class="modal__div  p-3">
                                                <div class="modal__body bg-white">
                                                    <div>
                                                        <div class="search__city__div">
                                                            <input type="text" class="city__input__search p-4"
                                                                placeholder="Votre Destination ..." name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="modal__head mb-2 p-2" style="overflow-y: scroll;">
                                                        <div class="row">
                                                            <div class="p-3">
                                                                <small>suggestions de déstinations qui pouraient vous
                                                                    intéreser </small>
                                                            </div>
                                                            <br>
                                                            <div class="nearby-city">
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Paris</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">New york</b>
                                                                            <br>

                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Berlin</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br><br>
                                                        <div class="modal__footer p-3 border-top">
                                                            <button
                                                                class="closeBtn btn btn-black float-right rounded"><b>Fermer</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-4 col-input-div pr-2 border-right ">
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>130 calendar</title>
                                                                    <path
                                                                        d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                                                    <circle cx="12" cy="15" r="1.5" />
                                                                    <circle cx="7" cy="15" r="1.5" />
                                                                    <circle cx="17" cy="15" r="1.5" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">

                                                                    Arrivee

                                                                </label>
                                                                <input type="text" name="départ"
                                                                    class="w-100 forms saDate_1 " date-start="1"
                                                                    id="startDateInputsa" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="startdatelocsaison" data-date=""
                                                                    data-date-type="1" data-date-starting="1"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->

                                                </div>
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="" style="position: relative;right: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>154 arrow right</title>
                                                                    <path
                                                                        d="M23.124,9.907,19.245,6.029a1,1,0,0,0-1.414,0h0a1,1,0,0,0,0,1.414L21.386,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.447l-3.616,3.615a1,1,0,0,0,0,1.415h0a1,1,0,0,0,1.414,0l3.88-3.879A3.008,3.008,0,0,0,23.124,9.907Z" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">
                                                                    Retour
                                                                </label>
                                                                <input type="text" name="arrivee"
                                                                    class="w-100 forms saDate_2 " id="endDateInputsa"
                                                                    placeholder="date de rétour" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="enddatelocsaison" data-date=""
                                                                    data-date-type="1" data-date-starting="2"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer p-2">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-input-div pr-2 border-right ">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" id="Layer_1"
                                                            data-name="Layer 1" viewBox="0 0 24 24">
                                                            <path
                                                                d="M7.5,13A4.5,4.5,0,1,1,12,8.5,4.505,4.505,0,0,1,7.5,13Zm0-7A2.5,2.5,0,1,0,10,8.5,2.5,2.5,0,0,0,7.5,6ZM15,23v-.5a7.5,7.5,0,0,0-15,0V23a1,1,0,0,0,2,0v-.5a5.5,5.5,0,0,1,11,0V23a1,1,0,0,0,2,0Zm9-5a7,7,0,0,0-11.667-5.217,1,1,0,1,0,1.334,1.49A5,5,0,0,1,22,18a1,1,0,0,0,2,0ZM17.5,9A4.5,4.5,0,1,1,22,4.5,4.505,4.505,0,0,1,17.5,9Zm0-7A2.5,2.5,0,1,0,20,4.5,2.5,2.5,0,0,0,17.5,2Z" />
                                                        </svg>
                                                    </td>
                                                    <td class="col-11" style="line-height: 8px;">
                                                        <label for="voyageurs">
                                                            Voyageurs
                                                        </label><br>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <input type="text" class=" " style="width: 10px;"
                                                                        name="Voyageurs" id="voyageurs" value="2"
                                                                        readonly>
                                                                </td>
                                                                <td class="">
                                                                    <small>voyageurs</small>
                                                                </td>
                                                                <td>,</td>
                                                                <td>
                                                                    <input type="text" class=" " style="width: 10px;"
                                                                        name="Voyageurs" id="chambres" value="1"
                                                                        readonly>
                                                                </td>
                                                                <td class="">
                                                                    <small>chambre</small>
                                                                </td>

                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div>
                                                <div class="modal__div p-4">
                                                    <div class="modal__body">

                                                        <div class="p-2">
                                                            <small>
                                                                cliquez sur le bouton + pour ajouter les chambres ou les
                                                                voyageurs et - pour les diminuer
                                                            </small>
                                                        </div>

                                                        <table>
                                                            <tr class="p-3">
                                                                <td class="p-3"><small>Voyageurs</small></td>
                                                                <td><button class="add" data-types="2">+</button></td>
                                                                <td class="p-4"><small class="addspan">1</small></td>
                                                                <td><button class="minus" data-types="2">-</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-3 col-lg-4"><small>Chambres</small></td>
                                                                <td><button class="add" data-types="1">+</button></td>
                                                                <td class="p-4"><small class="addspan">1</small></td>
                                                                <td><button class="minus" data-types="1">-</button></td>
                                                            </tr>


                                                        </table>
                                                        <br>
                                                        <div class="modal__footer p-2 border-top">
                                                            <button class="closeBtn btn btn-black float-right rounded">
                                                                <b>Fermer</b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-3 display-lg border-end col-input-div">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="checkbox"
                                                        id="" value="checkedValue" style="background-color: #111;">
                                                    &nbsp;&nbsp;&nbsp;<small>Je voyage pour le Travail</small>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-input-div no-border-bottom ">
                                            <button type="submit" class="btn p-2 col-lg-12 rounded-10px"
                                                style="background:#4ad395;color: #fff;"
                                                name="submit"><b>search</b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="Locations_de_voitures" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <form action="" method="get">
                                <div class="search__bar__div nav-shadow pl-4 pr-4 pt-3 pb-3   bg-white rounded-10px"
                                    style="position: relative;top: -50px;">
                                    <div class="row">
                                        <div class="col-lg-3 col-input-div pr-3 border-right border-start">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="left-20 " style="position: relative;">
                                                        <center>
                                                            <img src="svg/search.svg" width="18" alt="">

                                                        </center>
                                                    </td>
                                                    <td class="col-10 left-20"
                                                        style="line-height: 8px;position: relative;">
                                                        <label for="destination">
                                                            Lieu de prise en charge
                                                        </label>
                                                        <input type="text" name="destination" class="w-100 "
                                                            id="destination" placeholder="Destination"
                                                            value="A proximité" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div class="modal__div  p-3">
                                                <div class="modal__body bg-white">
                                                    <div>
                                                        <div class="search__city__div">
                                                            <input type="text" class="city__input__search p-4"
                                                                placeholder="Votre Destination ..." name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="modal__head mb-2 p-2" style="overflow-y: scroll;">
                                                        <div class="row">
                                                            <div class="p-3">
                                                                <small>suggestions de déstinations qui pouraient vous
                                                                    intéreser </small>
                                                            </div>
                                                            <br>
                                                            <div class="nearby-city">
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Paris</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">New york</b>
                                                                            <br>

                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Berlin</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br><br>
                                                        <div class="modal__footer p-3 border-top">
                                                            <button
                                                                class="closeBtn btn btn-black float-right rounded"><b>Fermer</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-4 col-input-div pr-2 border-right ">
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>130 calendar</title>
                                                                    <path
                                                                        d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                                                    <circle cx="12" cy="15" r="1.5" />
                                                                    <circle cx="7" cy="15" r="1.5" />
                                                                    <circle cx="17" cy="15" r="1.5" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">

                                                                    Arrivee

                                                                </label>
                                                                <input type="text" name="départ"
                                                                    class="w-100 forms hmDate_1"
                                                                    placeholder="date d'arrivée " id="startDateInputm"
                                                                    date-start="1" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="startdatehoteld" data-date=""
                                                                    data-date-type="1" data-date-starting="1"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->

                                                </div>
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="" style="position: relative;right: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>154 arrow right</title>
                                                                    <path
                                                                        d="M23.124,9.907,19.245,6.029a1,1,0,0,0-1.414,0h0a1,1,0,0,0,0,1.414L21.386,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.447l-3.616,3.615a1,1,0,0,0,0,1.415h0a1,1,0,0,0,1.414,0l3.88-3.879A3.008,3.008,0,0,0,23.124,9.907Z" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">
                                                                    Retour
                                                                </label>
                                                                <input type="text" name="arrivee"
                                                                    class="w-100 forms hmDate_2 " id="endDateInputsm"
                                                                    value="ven 27 Dec 2007" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="enddatehoteld" data-date="" data-date-type="1"
                                                                    data-date-starting="2"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer p-2">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-input-div pr-2 border-end">
                                            <div class="row">
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>

                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">

                                                                    Prise

                                                                </label>
                                                                <input type="text" name="départ" class="w-100 forms  "
                                                                    value="08:00
                                                                " id="hour1" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div>
                                                                <small>Heure de rémise du véhicule</small>
                                                                <div class="form-group">
                                                                    <label for=""></label>
                                                                    <select class="custom-select" name="" id="">
                                                                        <option value="">05:00</option>
                                                                        <option value="">06:00</option>
                                                                        <option value="">07:00</option>
                                                                        <option value="">08:00</option>
                                                                        <option value="">09:00</option>
                                                                        <option value="">10:00</option>
                                                                        <option value="">11:00</option>
                                                                        <option value="">12:00</option>
                                                                        <option value="">13:00</option>
                                                                        <option value="">14:00</option>
                                                                        <option value="">15:00</option>
                                                                        <option value="">16:00</option>
                                                                        <option value="">17:00</option>
                                                                        <option value="">18:00</option>
                                                                        <option value="">19:00</option>
                                                                        <option value="">20:00</option>
                                                                        <option value="">21:00</option>
                                                                        <option value="">22:00</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->
                                                </div>
                                                <div class="col-6 ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="" style="position: relative;right: 20px;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>154 arrow right</title>
                                                                    <path
                                                                        d="M23.124,9.907,19.245,6.029a1,1,0,0,0-1.414,0h0a1,1,0,0,0,0,1.414L21.386,11H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H21.447l-3.616,3.615a1,1,0,0,0,0,1.415h0a1,1,0,0,0,1.414,0l3.88-3.879A3.008,3.008,0,0,0,23.124,9.907Z" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">
                                                                    Rémise
                                                                </label>

                                                                <input type="text" name="arrivee" class="w-100 forms  "
                                                                    id="hour2" value="12:00" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div>
                                                                <small>Heure de rémise du véhicule</small>
                                                                <div class="form-group">
                                                                    <label for=""></label>
                                                                    <select class="custom-select" name="" id="">
                                                                        <option value="">05:00</option>
                                                                        <option value="">06:00</option>
                                                                        <option value="">07:00</option>
                                                                        <option value="">08:00</option>
                                                                        <option value="">09:00</option>
                                                                        <option value="">10:00</option>
                                                                        <option value="">11:00</option>
                                                                        <option value="">12:00</option>
                                                                        <option value="">13:00</option>
                                                                        <option value="">14:00</option>
                                                                        <option value="">15:00</option>
                                                                        <option value="">16:00</option>
                                                                        <option value="">17:00</option>
                                                                        <option value="">18:00</option>
                                                                        <option value="">19:00</option>
                                                                        <option value="">20:00</option>
                                                                        <option value="">21:00</option>
                                                                        <option value="">22:00</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-input-div no-border-bottom ">
                                            <button type="submit" class="btn p-2 col-lg-12 rounded-10px"
                                                style="background:#4ad395;color: #fff;"
                                                name="submit"><b>search</b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="sorties" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="" method="get">
                                <div class="search__bar__div nav-shadow pl-4 pr-4 pt-3 pb-3   bg-white rounded-10px"
                                    style="position: relative;top: -50px;">
                                    <div class="row">
                                        <div class="col-lg-5 col-input-div pr-3 border-right border-start">
                                            <table class="showdiv">
                                                <tr>
                                                    <td class="left-20 " style="position: relative;">
                                                        <center>
                                                            <img src="svg/search.svg" width="18" alt="">

                                                        </center>
                                                    </td>
                                                    <td class="col-10 left-20"
                                                        style="line-height: 8px;position: relative;">
                                                        <label for="destination">
                                                            Destination
                                                        </label>
                                                        <input type="text" name="destination" class="w-100 "
                                                            id="destination" placeholder="Destination"
                                                            value="A proximité" readonly>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- MODAL -->
                                            <div class="modal__div  p-3">
                                                <div class="modal__body bg-white">
                                                    <div>
                                                        <div class="search__city__div">
                                                            <input type="text" class="city__input__search p-4"
                                                                placeholder="Votre Destination ..." name="" id="">
                                                        </div>
                                                    </div>
                                                    <div class="modal__head mb-2 p-2" style="overflow-y: scroll;">
                                                        <div class="">
                                                            <div class="p-3">
                                                                <small>suggestions de déstinations qui pouraient vous
                                                                    intéreser </small>
                                                            </div>
                                                            <br>
                                                            <div class="nearby-city">
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Paris</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">New york</b>
                                                                            <br>

                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  p-3 city" style="width: 380px;">
                                                                    <div class="row">
                                                                        <div class="col-1"><img src="svg/location.svg"
                                                                                width="20" alt=""></div>
                                                                        <div class="col-11 city__name__div">
                                                                            <b class="city__name">Berlin</b><br>
                                                                            <small>28 établissments | 18 hotes</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br><br>
                                                        <div class="modal__footer p-3 border-top">
                                                            <button
                                                                class="closeBtn btn btn-black float-right rounded"><b>Fermer</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- MODAL -->
                                        </div>
                                        <div class="col-lg-5 col-input-div pr-2 border-right border-end ">
                                            <div class="row">
                                                <div class="col ">
                                                    <table class="showdiv">
                                                        <tr>
                                                            <td class="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                    id="Outline" viewBox="0 0 24 24">
                                                                    <title>130 calendar</title>
                                                                    <path
                                                                        d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                                                    <circle cx="12" cy="15" r="1.5" />
                                                                    <circle cx="7" cy="15" r="1.5" />
                                                                    <circle cx="17" cy="15" r="1.5" />
                                                                </svg>
                                                            </td>
                                                            <td class="col-11" style="line-height: 8px;">
                                                                <label for="destination">

                                                                    Dates

                                                                </label>
                                                                <input type="text" name="départ"
                                                                    class="w-100 forms sorDate_1"
                                                                    placeholder="date de sortie" date-start="1"
                                                                    id="startDateInputsor" readonly>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <!-- MODAL -->
                                                    <div class="modal__div p-3 ">
                                                        <div class="modal__body">
                                                            <div class="date">
                                                                <div id="startdatesorties" data-date=""
                                                                    data-date-type="1" data-date-starting="1"
                                                                    class="date__input date__hotel" style="width:100%;">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="modal__footer">
                                                                <button
                                                                    class="closeBtn btn btn-black float-right rounded">
                                                                    <b>Fermer</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- MODAL -->

                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-input-div no-border-bottom ">
                                            <button type="submit" class="btn p-2 col-lg-12 rounded-10px"
                                                style="background:#4ad395;color: #fff;"
                                                name="submit"><b>search</b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DIV TABS -->
        </div>
        <div class="container display-lg">
            <h4><b>Voyager local</b></h4>
            <p style="font-size: 15px;"> Passer un séjour près de chez vous ne signifie pas de passer de moins bon
                vacances
                <br> Sélectionnez un Hébergement
                pour un séjour inoubliable
            </p>
            <div class="wrapper container-fluid p-4   ">
                <div class="wrapper-item2 ">
                    <div class="nav-shadow rounded-12px">
                        <center>
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1610981109245-c3f748c98ad2?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fHBhcmlzJTIwZnJhbmNlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=100"
                                    class="wraper-img2 rounded-top-12px"
                                    alt="ville paris , france , voyage Skytripllaner">
                            </div>
                        </center>

                        <div class="p-4">
                            <span class="wrapper-text">
                                <h4><b> Paris</b></h4>
                                <small>28 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 12 Hôtes</small>
                                <br>
                                <button class="btn btn-outline-black"><small>Decouvrir</small></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="wrapper-item2 ">
                    <div class="nav-shadow rounded-12px">
                        <center>
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1572965735971-82a251c84b82?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3RyYXNib3VyZ3xlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=100"
                                    class="wraper-img2 rounded-top-12px"
                                    alt="ville Strasbourg , france , voyage Skytripllaner">
                            </div>
                        </center>

                        <div class="p-4">
                            <span class="wrapper-text">
                                <h4><b> Strasbourg</b></h4>
                                <small>18 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 12 Hôtes</small>
                                <br>
                                <button class="btn btn-outline-black"><small>Decouvrir</small></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="wrapper-item2 ">
                    <div class="nav-shadow rounded-12px">
                        <center>
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1597225764524-beb6e071d9ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmFudGVzfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=100"
                                    class="wraper-img2 rounded-top-12px"
                                    alt="ville Nantes , france , voyage Skytripllaner">
                            </div>
                        </center>

                        <div class="p-4">
                            <span class="wrapper-text">
                                <h4><b> Nantes</b></h4>
                                <small>12 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 10 Hôtes</small>
                                <br>
                                <button class="btn btn-outline-black"><small>Decouvrir</small></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="wrapper-item2 ">
                    <div class="nav-shadow rounded-12px">
                        <center>
                            <div class="">
                                <img src="https://images.unsplash.com/photo-1568736772245-26914aae0b09?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGJvcmRlYXV4fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=100"
                                    class="wraper-img2 rounded-top-12px"
                                    alt="ville bordeaux , france , voyage Skytripllaner">
                            </div>
                        </center>

                        <div class="p-4">
                            <span class="wrapper-text">
                                <h4><b> Bordeaux</b></h4>
                                <small>28 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 12 Hôtes</small>
                                <br>
                                <button class="btn btn-outline-black"><small>Decouvrir</small></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 container p-4 display-sm-none">
            <h4><b>Voyager local</b></h4>
            <p style="font-size: 15px;"> Passer un séjour près de chez vous ne signifie pas de passer de moins bon
                vacances
                <br> Sélectionnez un Hébergement
                pour un séjour inoubliable
            </p>
            <div class=" bg-white p-4 w-100 " style="border-radius: 10px;">
                <div class="row">
                    <div class="col-lg-8 pb-3" style="min-height: 250px;">
                        <div class="back w-100 h-100">
                            <div class=" w-100 text-white h-100 p-4 gray-light-gradient">
                                <h3><b class="text-white">Paris</b></h3>
                                <small>28 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 12 Hôtes</small>
                                <br><br>
                                <button class="btn btn-outline-white">Decouvrir</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12  pb-3" style="min-height: 250px;">
                                <div class="back3 w-100 h-100">
                                    <div class=" w-100 text-white h-100 p-4 gray-light-gradient">
                                        <h3><b class="text-white">Bordeaux</b></h3>
                                        <small>28 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 12 Hôtes</small>
                                        <br><br>
                                        <button class="btn btn-outline-white">Decouvrir</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 pb-3" style="min-height: 250px;">
                                <div class="back1 w-100 h-100">
                                    <div class=" w-100 text-white h-100 p-4 gray-light-gradient">
                                        <h3><b class="text-white">Nantes</b></h3>
                                        <small>28 établissements &nbsp;&nbsp; | &nbsp;&nbsp; 12 Hôtes</small>
                                        <br><br>
                                        <button class="btn btn-outline-white">Decouvrir</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3><b>Quels Hébergements vous fera Plaisir ?</b></h3>
            <div class="wrapper container-fluid ">
                <div class="wrapper-item">
                    <img src="https://images.unsplash.com/photo-1510798831971-661eb04b3739?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTF8fGhvdXNlfGVufDB8MXwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=100"
                        class="wraper-img " alt="Logements Atypiques">
                    <br>
                    <p><span class="wrapper-text">
                            <h5> <b>Logements Atypiques</b></h5><small> Plus de 245 </small>
                        </span></p>
                </div>
                <div class="wrapper-item">
                    <img src="https://images.unsplash.com/photo-1531835551805-16d864c8d311?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8YXBhcnRtZW50fGVufDB8MXwwfA%3D%3D&auto=format&fit=crop&w=400&q=100"
                        class="wraper-img" alt="Appartements">
                    <br>
                    <p><span class="wrapper-text">
                            <h5><b>Appartements</b></h5><small> Plus de 325 </small><br>
                        </span></p>
                </div>
                <div class="wrapper-item">
                    <img src="https://images.unsplash.com/photo-1601895288587-79066677741e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8dmlsbGFzfGVufDB8MXwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=100"
                        class="wraper-img" alt="Villas">
                    <br>
                    <p><span class="wrapper-text">
                            <h5><b>Villas</b></h5><small> Plus de 122 </small><br>
                        </span></p>
                </div>
                <div class="wrapper-item">
                    <img src="https://images.unsplash.com/photo-1563911302283-d2bc129e7570?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=100"
                        class="wraper-img" alt="Hotels">
                    <br>
                    <p><span class="wrapper-text">
                            <h5><b>Hotels</b></h5><small> Plus de 455 </small><br>
                        </span></p>
                </div>
            </div>


        </div>
        <div class="w-100 bg-light">
            <div class="p-4">
                <div class="containerx ">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="text-capitalize"><small>skytripplanner hôte</small></span>
                            <h2>
                                <b class="text">
                                    Des Nombreux Hôtes sont prêts a vous accueillir !
                                </b>
                            </h2>
                            <p>
                                De nombreux hôtes à travers le monde sont prêt à vous accueillir pour vous offrir une
                                expérience inédite et unique . commencer des a présent à découvrir ces hôtes.
                            </p>
                            <div class="checklist">
                                <div class="row">
                                    <div class="col">
                                        <img src="svg/check.svg" width="20" alt="">
                                        &nbsp;&nbsp;
                                        Planification rapide
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <img src="svg/check.svg" width="20" alt="">
                                        &nbsp;&nbsp;
                                        possibilité d'annulations
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <img src="svg/check.svg" width="20" alt="">
                                        &nbsp;&nbsp;
                                        Maisons vérifiés par nos agent pour vous offrir une éxperience inédite
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <button class="btn btn-black p-3 " style="border-radius:1rem">En savoir plus
                                &nbsp;&nbsp;
                                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="10"
                                    fill="#fff">
                                    <title>168 arrow right</title>
                                    <path
                                        d="M7,24a1,1,0,0,1-.707-1.707l8.172-8.172a3,3,0,0,0,0-4.242L6.293,1.707A1,1,0,0,1,7.707.293l8.172,8.172a5.005,5.005,0,0,1,0,7.07L7.707,23.707A1,1,0,0,1,7,24Z" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="pt-3 display-lg">
                                <img src="assets/hotes.JPG" class="img-fluid display-lg" alt="">

                            </div>
                            <div class="rounded-circle display-sm-none">
                                <img src="assets/hote (1).jpg" class="img-fluid  rounded-circle " width="80"
                                    style="position: relative;top: 100px;left: 50px;" alt="">
                                <img src="assets/hote (6).jpg" class="img-fluid  rounded-circle " width="80"
                                    style="position: relative;top: 100px;left: 200px;" alt="">
                                <div class="rounded-circle p-5"
                                    style="width: 400px;height: 400px;border:40px solid #f1f1f1;">

                                    <center>
                                        <img src="assets/pro1.jpg" class="img-fluid rounded-circle " alt="">
                                    </center>
                                </div>

                                <img src="assets/hote (5).jpg" class="img-fluid  rounded-circle " width="80"
                                    style="position: relative;top: -200px;left: -10px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <h4>
                    <b>
                        Rejoignez des milliers d'hôtes sur skytripplanner
                    </b>
                </h4>
                <div class="row pt-4">
                    <div class="col-lg-4 pb-4 " style="border-radius: 10px;">
                        <div class="container nav-shadow">
                            <br>
                            <img src="https://ghtfulen.sirv.com/sky/main/main__home/hotes.jpeg" class=" "
                                style="width: 100%;" alt="">
                            <div class="p-4">
                                <h5><b>Devenir Hôte</b></h5>
                                <small>vous pouvez gagner jusqu'a 4000€ par mois en acceuillant des visiteurs chaque
                                    jour dans vos chambres ou espace snon utilisé</small>
                                <br><br>
                                <button class="btn btn-outline-black"><b>Commencer</b></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-4 " style="border-radius: 10px;">
                        <div class="container nav-shadow">
                            <br>
                            <img src="https://images.unsplash.com/photo-1609751352001-25b60439239c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8b25saW5lJTIwdmlkZW98ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=100"
                                class=" " style="width: 100%;" alt="Organiser des activités en ligne">
                            <div class="p-4">
                                <h5><b>Organiser des activités en ligne</b></h5>
                                <small>Organiser des activités en ligne et partager vos experiences et vos passions tout
                                    en gagnat de l'argent</small>
                                <br><br>
                                <button class="btn btn-outline-black"><b>Commencer</b></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-4 " style="border-radius: 10px;">
                        <div class="container nav-shadow">
                            <br>
                            <img src="https://images.unsplash.com/photo-1600403477955-2b8c2cfab221?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGN5Y2xpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=100"
                                class=" " style="width: 100%;" alt="">
                            <div class="p-4">
                                <h5><b>Organiser des sorties</b></h5>
                                <small>Organiser et planifier vos sorties plus rapidement et gagnez en temps .</small>
                                <br><br>
                                <button class="btn btn-outline-black"><b>Commencer</b></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            
        document.querySelector(".navbar-toggler").addEventListener("click", function () {
            document.querySelector("#navbarSupportedContent").classList.toggle("activex");
        })
        document.querySelector("#close__notice").addEventListener("click", function () {

            this.parentNode.parentNode.parentNode.style.display = "none";


        })
        // Dates initiales

        window.addEventListener("DOMContentLoaded", function () {

            var headers = document.querySelectorAll(".modal__header");

            // function createHeaders(element) {

            // }

            for (let i = 0; i < headers.length; i++) {
                // createHeaders(headers[i])
                try {
                    var add__header = document.createElement("h6")
                    add__header.className = "text-center h6";
                    headers[i].appendChild(add__header)
                    var bold = document.createElement("b");
                    bold.textContent = headers[i].parentNode.parentNode.previousElementSibling.querySelector("label").textContent;
                    add__header.appendChild(bold);
                    if (i == 2) {
                        var destination = headers[i - 2].parentNode.parentNode.previousElementSibling.querySelector("input").value;
                    }
                    var small_destination = document.createElement("small")
                    if (destination) {
                        small_destination.textContent = destination;
                        small_destination.className = "text-center";
                        add__header.appendChild(small_destination);

                        var espace = document.createElement("br");
                        espace.insertBefore(small_destination)
                        small_destination.appendChild(espace)
                    }
                } catch (error) {

                }


            }
            var forms = document.querySelectorAll(".forms")
            var date = new Date()
            //  jours initial
            if (date.getDay() == 0) {
                var days = "Lun"
            } else if (date.getDay() == 1) {
                var days = "Mar"
            } else if (date.getDay() == 2) {
                var days = "Mer"
            } else if (date.getDay() == 3) {
                var days = "Jeu"
            } else if (date.getDay() == 4) {
                var days = "Vend"
            } else if (date.getDay() == 5) {
                var days = "Sam"
            } else if (date.getDay() == 6) {
                var days = "Dim"
            }
            // mois
            if (date.getMonth() == 0) {
                var month = "jan"
            } else if (date.getMonth() == 1) {
                var month = "fev"
            } else if (date.getMonth() == 2) {
                var month = "Mars"
            } else if (date.getMonth() == 3) {
                var month = "Avril"
            } else if (date.getMonth() == 4) {
                var month = "Mai"
            } else if (date.getMonth() == 5) {
                var month = "juin"
            } else if (date.getMonth() == 6) {
                var month = "juill"
            } else if (date.getMonth() == 7) {
                var month = "Aout"
            } else if (date.getMonth() == 8) {
                var month = "Semp"
            } else if (date.getMonth() == 9) {
                var month = "Oct"
            } else if (date.getMonth() == 10) {
                var month = "Nov"
            } else if (date.getMonth() == 11) {
                var month = "Dec"
            }
            // année


            var year = date.getFullYear()
            for (let i = 0; i < forms.length; i++) {

                var data_start = forms[i].getAttribute("date-start")
                if (data_start == 1) {

                    forms[i].value = days + "," + date.getDate() + " " + month
                } else {
                    function addDaysToDate(date, days) {
                        var res = new Date(date);
                        res.setDate(res.getDate() + days);
                        return res;
                    }
                    var tmpDate = new Date(date.getFullYear(), date.getMonth(), date.getDate()); // Augest 20, 2020
                    var date_n = addDaysToDate(tmpDate, 3);
                    if (date_n.getDay() == 0) {
                        var days_n = "Lun"
                    } else if (date_n.getDay() == 1) {
                        var days_n = "Mar"
                    } else if (date_n.getDay() == 2) {
                        var days_n = "Mer"
                    } else if (date_n.getDay() == 3) {
                        var days_n = "Jeu"
                    } else if (date_n.getDay() == 4) {
                        var days_n = "Vend"
                    } else if (date_n.getDay() == 5) {
                        var days_n = "Sam"
                    } else if (date_n.getDay() == 6) {
                        var days_n = "Dim"
                    }
                    forms[i].value = days_n + "," + date_n.getDate() + " " + month;

                }

            }
        })




        var btn = document.querySelectorAll(".showdiv");
        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener("click", function (e) {
                e.preventDefault();
                var parent = this.parentNode.querySelector(".modal__div");
                if (parent) {
                    parent.classList.toggle("activex");
                }
                // BTNs CLOSE
                // parent.querySelector(".modal__head").querySelector(".close__btn").addEventListener("click", function () {
                //     parent.classList.remove("activex");
                // })
                parent.querySelector(".modal__footer").querySelector(".closeBtn").addEventListener("click", function (e) {
                    e.preventDefault()
                    parent.classList.remove("activex");
                })

                // automaticaly close when clicked out
                if (parent) {
                    window.addEventListener("click", function (e) {
                        e.preventDefault()
                        if (e.target == parent) {
                            parent.querySelector(".modal__footer").querySelector(".closeBtn").click();

                        }
                    })
                }
                // BTNs CLOSE
                // search input
                if (parent.querySelector(".search__city__div")) {
                    var input__search__city = parent.querySelector(".search__city__div").querySelector(".city__input__search")
                    input__search__city.addEventListener("keyup", function () {
                        if (parent.previousElementSibling.querySelector("#destination")) {

                            parent.previousElementSibling.querySelector("#destination").value = this.value
                        }

                    })
                }
                // suggestions
                var cities = document.querySelectorAll(".city");
                for (let j = 0; j < cities.length; j++) {
                    cities[j].addEventListener("click", function (e) {
                        try {
                            parent.previousElementSibling.querySelector("#destination").value = this.querySelector(".city__name__div").querySelector(".city__name").innerHTML;
                        } catch (e) {

                        }
                        parent.querySelector(".modal__footer").querySelector(".closeBtn").click();


                    })

                }
                // custom checkbox
                var custom__checkbox = document.querySelectorAll(".custom-control");

                for (let l = 0; l < custom__checkbox.length; l++) {
                    custom__checkbox[l].addEventListener("click", function () {

                    })

                }




                if (parent.querySelector(".modal__body").querySelector(".date")) {
                    //j' essai de recuperer l ID de l ' element enfin de l 'initialiser suivant boostrap-datepicker.js
                    var date__input = parent.querySelector(".modal__body").querySelector(".date").querySelector(".date__input");
                    if (date__input.getAttribute("data-date-starting") == 1) {
                        //  si le data-date-starting est égale a 1 alors il s'agit de l' input de la date de depart sinon cest celui de la dte darrivée'
                        var sDate = "d";
                    } else {
                        var sDate = "+1d";
                    }
                }
                try {
                    date__input.getAttribute("id")
                    var id = date__input.getAttribute("id");
                } catch (e) {

                }

                function picker(a) {
                    $(a).datepicker({
                        startDate: sDate,
                        language: "fr",
                        format: "dd/mm/yyyy",
                        todayHighlight: true,
                        templates: {
                            leftArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="15" id="Outline" viewBox="0 0 24 24"><title>169 arrow left</title><path d="M17.172,24a1,1,0,0,1-.707-.293L8.293,15.535a5,5,0,0,1,0-7.07L16.465.293a1,1,0,0,1,1.414,1.414L9.707,9.879a3,3,0,0,0,0,4.242l8.172,8.172A1,1,0,0,1,17.172,24Z"/></svg>'
                            ,
                            rightArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="15" id="Outline" viewBox="0 0 24 24"><title>168 arrow right</title><path d="M7,24a1,1,0,0,1-.707-1.707l8.172-8.172a3,3,0,0,0,0-4.242L6.293,1.707A1,1,0,0,1,7.707.293l8.172,8.172a5.005,5.005,0,0,1,0,7.07L7.707,23.707A1,1,0,0,1,7,24Z"/></svg>'
                        },
                        autoclose: true,
                        maxViewMode: 0,
                        minViewMode: 0
                    });
                }
                if (picker("#" + id)) {
                    // initialisation effective
                } else {
                    picker("#" + id);
                }
                // valeur des inputs dates par defaut






                $("#" + id).on("changeDate", function () {

                    if (date__input.getAttribute("data-date-starting") == 1) {
                        var forms = parent.parentNode.querySelector(".showdiv").querySelector(".forms")
                        inputId = forms.getAttribute("id");
                        $("#" + inputId).val($("#" + id).datepicker('getFormattedDate'));

                        // selectionnons la forms suivante
                        var nextFormControl = forms.classList[2].split("_")[0] + "_2";


                        try {
                            var nextFormControlvalue = parent.parentNode.nextElementSibling.querySelector("." + nextFormControl).value;
                        } catch (error) {

                        }


                        // date pique par lutilisateur
                        var pickedDate = $("#" + id).datepicker('getFormattedDate');


                        // conversion de la date en format yyyy/mm/dd
                        try {
                            nextFormControlvalueNormal = nextFormControlvalue.split("/")[2] + "-" + nextFormControlvalue.split("/")[1] + "-" + nextFormControlvalue.split("/")[0]
                            var date1 = new Date(nextFormControlvalueNormal)

                            pickedDateNormal = pickedDate.split("/")[2] + "-" + pickedDate.split("/")[1] + "-" + pickedDate.split("/")[0]
                            var date2 = new Date(pickedDateNormal)

                            if (nextFormControlvalue == "") {
                                if (parent.parentNode.nextElementSibling.querySelector("." + nextFormControl)) {

                                    parent.parentNode.nextElementSibling.querySelector("." + nextFormControl).value = pickedDate
                                }
                            } else {
                                if (date2 > date1) {

                                    parent.parentNode.nextElementSibling.querySelector("." + nextFormControl).value = pickedDate
                                }
                            }
                        } catch (error) {

                        }
                        // conversion de la date en language facile
                        // var Datepicke = forms.value;
                        // var pick = Datepicke.split("/")[2] + "-" + Datepicke.split("/")[1] + "-" + Datepicke.split("/")[0]
                        // var dateConverti = new Date(pick)
                        // // jours
                        // if (dateConverti.getDay() == 0) {
                        //     var days = "Lun"
                        // } else if (dateConverti.getDay() == 1) {
                        //     var days = "Mar"
                        // } else if (dateConverti.getDay() == 2) {
                        //     var days = "Mer"
                        // } else if (dateConverti.getDay() == 3) {
                        //     var days = "Jeu"
                        // } else if (dateConverti.getDay() == 4) {
                        //     var days = "Vend"
                        // } else if (dateConverti.getDay() == 5) {
                        //     var days = "Sam"
                        // } else if (dateConverti.getDay() == 6) {
                        //     var days = "Dim"
                        // }
                        // // date
                        // var date = dateConverti.getDate()
                        // // mois
                        // if (dateConverti.getMonth() == 0) {
                        //     var month = "jan"
                        // } else if (dateConverti.getMonth() == 1) {
                        //     var month = "fev"
                        // } else if (dateConverti.getMonth() == 2) {
                        //     var month = "Mars"
                        // } else if (dateConverti.getMonth() == 3) {
                        //     var month = "Avril"
                        // } else if (dateConverti.getMonth() == 4) {
                        //     var month = "Mai"
                        // } else if (dateConverti.getMonth() == 5) {
                        //     var month = "juin"
                        // } else if (dateConverti.getMonth() == 6) {
                        //     var month = "juill"
                        // } else if (dateConverti.getMonth() == 7) {
                        //     var month = "Aout"
                        // } else if (dateConverti.getMonth() == 8) {
                        //     var month = "Semp"
                        // } else if (dateConverti.getMonth() == 9) {
                        //     var month = "Oct"
                        // } else if (dateConverti.getMonth() == 10) {
                        //     var month = "Nov"
                        // } else if (dateConverti.getMonth() == 11) {
                        //     var month = "Dec"
                        // }
                        // // annee
                        // var years = dateConverti.getFullYear();

                        // // parent.parentNode.querySelector(".showdiv").querySelector(".forms").value = "Mer 14 Avril 2021"
                        // parent.parentNode.querySelector(".showdiv").querySelector(".forms").value = days + " " + date + " " + month + " " + years
                    } else {
                        var forms = parent.parentNode.querySelector(".showdiv").querySelector(".forms")
                        inputId = forms.getAttribute("id");
                        $("#" + inputId).val($("#" + id).datepicker('getFormattedDate'));

                        var previousFormControl = forms.classList[2].split("_")[0] + "_1";
                        try {
                            var previousFormControlValue = parent.parentNode.previousElementSibling.querySelector("." + previousFormControl).value;
                        } catch (error) {

                        }


                        // date pique par lutilisateur
                        var pickedDate = $("#" + id).datepicker('getFormattedDate');


                        // conversion de la date en format yyyy/mm/dd
                        previousFormControlValueNormal = previousFormControlValue.split("/")[2] + "-" + previousFormControlValue.split("/")[1] + "-" + previousFormControlValue.split("/")[0]
                        var date1 = new Date(previousFormControlValueNormal)

                        pickedDateNormal = pickedDate.split("/")[2] + "-" + pickedDate.split("/")[1] + "-" + pickedDate.split("/")[0]
                        var date2 = new Date(pickedDateNormal)

                        if (date1 >= date2) {
                            parent.parentNode.previousElementSibling.querySelector("." + previousFormControl).value = pickedDate
                        }
                        // // conversion de la date en language facile
                        // var Datepicke = forms.value;
                        // var pick = Datepicke.split("/")[2] + "-" + Datepicke.split("/")[1] + "-" + Datepicke.split("/")[0]
                        // var dateConverti = new Date(pick)
                        // // jours
                        // if (dateConverti.getDay() == 0) {
                        //     var days = "Lun"
                        // } else if (dateConverti.getDay() == 1) {
                        //     var days = "Mar"
                        // } else if (dateConverti.getDay() == 2) {
                        //     var days = "Mer"
                        // } else if (dateConverti.getDay() == 3) {
                        //     var days = "Jeu"
                        // } else if (dateConverti.getDay() == 4) {
                        //     var days = "Vend"
                        // } else if (dateConverti.getDay() == 5) {
                        //     var days = "Sam"
                        // } else if (dateConverti.getDay() == 6) {
                        //     var days = "Dim"
                        // }
                        // // date
                        // var date = dateConverti.getDate()
                        // // mois
                        // if (dateConverti.getMonth() == 0) {
                        //     var month = "jan"
                        // } else if (dateConverti.getMonth() == 1) {
                        //     var month = "fev"
                        // } else if (dateConverti.getMonth() == 2) {
                        //     var month = "Mars"
                        // } else if (dateConverti.getMonth() == 3) {
                        //     var month = "Avril"
                        // } else if (dateConverti.getMonth() == 4) {
                        //     var month = "Mai"
                        // } else if (dateConverti.getMonth() == 5) {
                        //     var month = "juin"
                        // } else if (dateConverti.getMonth() == 6) {
                        //     var month = "juill"
                        // } else if (dateConverti.getMonth() == 7) {
                        //     var month = "Aout"
                        // } else if (dateConverti.getMonth() == 8) {
                        //     var month = "Semp"
                        // } else if (dateConverti.getMonth() == 9) {
                        //     var month = "Oct"
                        // } else if (dateConverti.getMonth() == 10) {
                        //     var month = "Nov"
                        // } else if (dateConverti.getMonth() == 11) {
                        //     var month = "Dec"
                        // }
                        // // annee
                        // var years = dateConverti.getFullYear();

                        // // parent.parentNode.querySelector(".showdiv").querySelector(".forms").value = "Mer 14 Avril 2021"
                        // parent.parentNode.querySelector(".showdiv").querySelector(".forms").value = days + " " + date + " " + month + " " + years
                    }

                });

            });


        }
        // voyageurs
        var add = document.querySelectorAll(".add");
        for (var k = 0; k < add.length; k++) {
            add[k].addEventListener("click", function (e) {
                e.preventDefault()
                // alert("e")
                var contenu = this.parentNode.nextElementSibling.querySelector(".addspan").innerHTML;
                if (contenu < 15) {
                    if (this.getAttribute("data-types") == 2) {
                        contenu++
                        this.parentNode.nextElementSibling.querySelector(".addspan").innerHTML = contenu;
                        // input && value
                        var Gparent = this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
                        Gparent.previousElementSibling.querySelector("#voyageurs").value = contenu
                    } else {
                        contenu++
                        this.parentNode.nextElementSibling.querySelector(".addspan").innerHTML = contenu;
                        // input && value
                        var Gparent = this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
                        Gparent.previousElementSibling.querySelector("#chambres").value = contenu
                        // parent.parentNode.parentNode.querySelector(".showdiv").querySelector("#chambres").value = contenu
                    }
                }

            })

        }
        var minus = document.querySelectorAll(".minus");
        for (var k = 0; k < add.length; k++) {
            minus[k].addEventListener("click", function (e) {
                e.preventDefault()
                // alert("e")
                var contenu = this.parentNode.previousElementSibling.querySelector(".addspan").innerHTML;
                if (contenu > 1) {

                    if (this.getAttribute("data-types") == 1) {
                        contenu--
                        this.parentNode.previousElementSibling.querySelector(".addspan").innerHTML = contenu
                        // input && value
                        var Gparent = this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
                        Gparent.previousElementSibling.querySelector("#chambres").value = contenu

                    } else if (this.getAttribute("data-types") == 2) {
                        contenu--
                        this.parentNode.previousElementSibling.querySelector(".addspan").innerHTML = contenu
                        // input && value
                        var Gparent = this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode;
                        Gparent.previousElementSibling.querySelector("#voyageurs").value = contenu

                    }

                }


            })

        }


   
        </script>
    </main>