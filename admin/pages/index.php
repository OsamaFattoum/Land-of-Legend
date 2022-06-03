<!-- Start Boxes Dashboard -->
    <div class="row box g-2 ">
        <!-- Start Box User -->
        <a href="?page=users" class="col py-3">
            <div class="icons">
                <i class="fa fa-users fs-1"></i>
            </div>
            <div class="text-box ">
                <h1 class="fs-3">Users</h1>
                <span class="fs-1"><?php echo DataBaseQuery::getCountQuery('users','id','WHERE is_admin = 0'); ?></span>
            </div> 
        </a>
        <!-- End Box User -->
        <!-- Start Box News -->
        <a href="?page=news" class="col mx-2 py-3">
            <div class="icons">
                <i class="fa-solid fa-newspaper fs-1"></i>
            </div>
            <div class="text-box">
                <h1 class="fs-3">News</h1>
                <span class="fs-1"><?php echo DataBaseQuery::getCountQuery('news','id'); ?></span>
            </div> 
        </a>
        <!-- End Box News -->
        <!-- Start Box Hotels -->
        <a href="?page=hotels" class="col mx-2 py-3">
            <div class="icons ">
                <i class="fa-solid fa-hotel fs-1"></i>
            </div>
            <div class="text-box">
                <h1 class="fs-3">Hotels</h1>
                <span class="fs-1"><?php echo DataBaseQuery::getCountQuery('hotels','id'); ?></span>
            </div> 
        </a>
        <!-- End Box Hotels -->
        <!-- Start Box Airline -->
        <a href="?page=airlines" class="col py-3">
            <div class="icons">
                <i class="fa-solid fa-plane-departure fs-1 "></i>
            </div>
            <div class="text-box">
                <h1 class="fs-3">Airlines</h1>
                <span class="fs-1"><?php echo DataBaseQuery::getCountQuery('airlines','id'); ?></span>
            </div> 
        </a>
        <!-- End Box Airline -->

    </div>
<!-- End Boxes Dashboard -->


<div class="row py-5"></div>

<?php 
     /****** Query Get Airlines Reservation Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT res_airline.*, airlines.name_en AS 'airline_name',countries.name AS 'country_name' FROM `res_airline` INNER JOIN `airlines` ON res_airline.airline_id = airlines.id INNER JOIN `countries` ON res_airline.country_res_id = countries.id ORDER BY id DESC LIMIT 5";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $res_airline = $stmt->fetchAll();

    /****** Query Get Hotels Reservation Form Database  ****** */
    $con = DataBaseQuery::conDataBase();
    $sql2 = "SELECT res_h.*, hotels.name_en AS 'hotel_name' FROM `res_h` INNER JOIN `hotels` ON res_h.hotel_id = hotels.id ORDER BY id DESC LIMIT 5";
    $stmt2 = $con->prepare($sql2);
    $stmt2->execute();
    $res_h = $stmt2->fetchAll();
?>



<!-- Start Table Airlines Reservation -->
    <div class="row"><h3>Lastes Airlines Reservation</h3></div>
    <div class="row gy-3 ">
        <div class="col overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date_In</th>
                    <th scope="col">Date_Out</th>
                    <th scope="col">Price</th>
                    <th scope="col">Airline Name</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(!empty($res_airline)){ $i = 1; foreach($res_airline as $airline){
                    $date_out = $airline['date_out'] == '0000-00-00' ? '-' : $airline['date_out'];
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>";switch ($airline['type']) {
                                case 0:
                                    echo 'Premium Economy Class';
                                    
                                    break;
                                case 1:
                                    echo 'Business Class';
                                    break;
                                case 2:
                                    echo 'First-Class';
                                    break;
                                default:
                                    # code...
                                    break;
                                }echo "</td>
                            <td>".$airline['date_in']."</td>
                            <td>".$date_out."</td>
                            <td>".$airline['price']."$</td>
                            <td>".$airline['airline_name']."</td>
                            <td>".$airline['country_name']."</td>
                            <td class=''>
                                <a href='?page=airlines&edit_res=".$airline['id']."' class='btn btn-info '><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=airlines&delete_res=".$airline['id']."' class='btn btn-danger '><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                    }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Airlines Reservation Found</h3></td> </tr>";} 
                ?>
            </tbody> 
        </table>
        </div>
    </div>
    
<!-- End Table Airlines Reservation -->

<div class="row py-4"></div>

<!-- Start Table Hotels Reservation -->
    <div class="row"><h3>Lastes Hotels Reservation</h3></div>
    <div class="row gy-3 ">
        <div class="col overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Range</th>
                    <th scope="col">Price</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Date_In</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nights</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(!empty($res_h)){ $i = 1; foreach($res_h as $hotel){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>";switch ($hotel['type']) {
                                case 0:
                                    echo 'Laxuray Room';
                                    break;
                                case 1:
                                    echo 'Medium Room';
                                    break;
                                case 2:
                                     echo 'Normal Room';
                                    break;
                                default:
                                    # code...
                                    break;
                                }echo "</td>
                            <td>".$hotel['range_room']."</td>
                            <td>".$hotel['price']."$</td>
                            <td>".$hotel['hotel_name']."</td>
                            <td>".$hotel['date_in']."</td>
                            <td>".$hotel['status']."</td>
                            <td>".$hotel['nights']."</td>
                            <td class=''>
                                <a href='?page=hotels&edit_res=".$hotel['id']."' class='btn btn-info '><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=hotels&delete_res=".$hotel['id']."' class='btn btn-danger '><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                    }}else{ echo "<tr> <td colspan='9' class='text-center'> <h3>No Hotels Reservation Found</h3></td> </tr>";} 
                ?>
            </tbody> 
        </table>
        </div>
    </div>
<!-- End Table Hotels Reservation -->