<?php
    /****** Query Get News Form Database  ****** */
    $news = DataBaseQuery::selectQuery('*','news');
?>

<!-- Start Header News  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>News Table</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header News  -->

<div class="row py-3"></div>

<!-- Start Content News  -->
    <div class="row overflow-auto">
    <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name_English</th>
                    <th scope="col">Name_Arabic</th>
                    <th scope="col">Desc_English</th>
                    <th scope="col">Desc_Arabic</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($news)){ $i = 1; foreach($news as $new){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$new['name_en']."</td>
                            <td>".$new['name_ar']."</td>
                            <td>".wordwrap($new['desc_en'],strlen($new['desc_en'])/2.5,'<br>',true)."</td>
                            <td>".wordwrap($new['desc_ar'],strlen($new['desc_ar'])/2.5,'<br>',true)."</td>
                            <td>".$new['date']."</td>
                            <td><img style='width:40px;height:40px' src='Layout/images/upload/".$new['image']."'/></td>
                            <td class=''>
                                <a href='?page=news&edit=".$new['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=news&delete=".$new['id']."' class='btn btn-danger'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No News Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=news&add" class="btn btn-primary"><i class="fa fa-add me-1" aria-hidden="true"></i> Add New</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content News  -->
