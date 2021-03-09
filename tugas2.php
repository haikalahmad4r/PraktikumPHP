
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="cust" value="" class="form-control">
                </div>
                <div class="form-group">
                <label name="item" for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio"  id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio3" value="mesin cuci" >
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="totalitem" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" name="date" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select name ="type" class="form-select form-control" class="form-control">
                    
                    <option >Tiki</option>
                    <option >Si Cepat</option>
                    <option >Pos</option>
                    <option >Grab</option>
                    <option >Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="shipping" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="courier" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="assurance" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">

            </form>
            </div>
            <?php
            $cust = $_POST['cust'];
            $item = $_POST['item'];
            $shipping = $_POST['shipping'];
            $simpan = $_POST['simpan'];
            $date = $_POST['date'];
            $cour = $_POST['courier'];
            $assurance = $_POST['assurance'];
            $type = $_POST['type'];
            
            if ($item = TV){
                $typitem = 'TV';
            }else {
                echo 'Pilih item dulu';
            }

            ?>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $cust?> </li>
                    <li class="list-group-item">Item : <?= $typitem?> </li>
                    <li class="list-group-item">Date Shipping : <?= $date?> </li>
                    <li class="list-group-item">Courier Type : <?= $type ?> </li>
                    <li class="list-group-item">Shipping Address : <?= $shipping?> </li>
                    <li class="list-group-item">Courier Cost : <?= $cour?> </li>
                    <li class="list-group-item">Assurance Cost : <?= $assurance ?>  </li>
                    <li class="list-group-item">Total Cost :</li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
