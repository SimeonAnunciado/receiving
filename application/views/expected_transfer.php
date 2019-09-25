
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ITEMS FOR TRANSFER</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/admin_lte/dist/css/skins/_all-skins.min.css ">
  <style>
  .table-items {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  .table-items td, .table-items th {
      border: 1px solid #ddd;
      padding: 8px;
  }

  .table-items tr:nth-child(even){background-color: #f2f2f2;}

  .table-items tr:hover {background-color: #ddd;}

  .table-items th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #c0392b;
      color: white;
  }
  .form-control {
    border-radius: 0px;
  }
  </style>
<body>
    <br><br>

    <div class="container">
    <center><h5><b>ITEMS FOR TRANSFER # <?php echo $datas->id ?></h5> </b></center><br>
    <table class="table" style="font-size:12px;">
        <thead>
        <tr>
            <th>Transfer # : </th>
            <th align="center"><?php echo $datas->id ?></th>
            <th>Requested by :</th>
            <th><?php echo $datas->requested ?></th>
        </tr>
        <tr>
            <th>Out from Branch Date : </th>
            <th> <?php echo $datas->transfer_date; ?></th>
            
            <th>Date Created</th>
            <th><?php echo $datas->date_created ?></th>
        </tr>
        <tr>
            <th>From Branch : </th>
            <th> <?php echo $datas->br_code_in ?></th>
            <th>To Branch :</th>
            <th><?php echo $datas->br_code_out ?></th>
        </tr>
        </thead>
    </table>
    <table class='table-items' style="font-size:13px;">
        <tr>
            <th  >Barcode</th>
            <th  >Decription</th>
            <th  >UOM</th>
            <th  >QTY</th>
        </tr>
        <?php $total = 0 ; ?>
        <?php foreach($prods as $prod) :?>
        <tr>
           <td><?php echo $prod->barcode; ?></td>
           <td><?php echo $prod->description; ?></td>
           <td><?php echo $prod->uom; ?></td>
           <td><?php echo $prod->qty; ?></td>
           <?php $total+= $prod->qty;?>
          
        </tr>

        <?php endforeach ?>
      
        <tr>
            <td colspan="3">Total</td>
            <td><?php echo $total ?></td>
        </tr>
        
       
    </table>
    </div>

</body>
</head>
</html>
