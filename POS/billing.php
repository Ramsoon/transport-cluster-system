<?php
	ob_start();
	require 'myConnection.php';
	echo "<div id='billTitle'>";
	showTitle();
	echo "</div>";

                      $entryDate=date("Y-m-d H:i:s");     
	if(isset($_GET['x'])){
        
        
        if  (isset($_POST['amt'])){
                    $id =     $_POST['id'];
                     $amt =         $_POST['amt']    ;
                       $prev =       $_POST['prev']    ;   
                       $ss=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"select * from invoices where invoice_id = '$id' "));
                       $sadiq  = $ss['cash_back'];         
                        $prev  = $ss['cash_given'];   
                       $sadiq+=$amt;
                             
                       $prev+=$amt;
                               
             $sql ="Update invoices SET selling_date='$entryDate', cash_given= '$prev',cash_back='$sadiq' where invoice_id = '$id' ";
                      
                     $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);    
                       
                    if (!$result) {
            die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
        }else{
                echo 'Successful';
                
                ?>
                <script>
                         alert("Balance Added");
                                              window.location='showBill.php?x=<?php echo $id ?>'
                </script>
                
                <?php
           exit; 
        }   
        }
		$invoiceId=$_GET['x'];

		$sql="SELECT amount,invoice_id,return_id FROM returns WHERE refund_invoice_id='$invoiceId'";
		$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
		}
		if(mysqli_num_rows($result)){
			$row=mysqli_fetch_array($result);
			$returnAmount=$row['amount'];
			$returnBillId=$row['invoice_id'];
			$returnId=$row['return_id'];
		}else{
			$returnAmount=0;
		}		
		

		$sql="SELECT selling_date,discount,vat,cash_given,cash_back,customer_name,customer_contact,accounts.employee_no,employee_name,employee_phone FROM invoices JOIN customers ON invoices.customer_id=customers.customer_id JOIN accounts ON invoices.employee_no=accounts.employee_no WHERE invoices.invoice_id='$invoiceId'";
		$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
		}
		$row=mysqli_fetch_array($result);

		$sellingDate=$row['selling_date'];
		$customerName=$row['customer_name'];
		$customerContact=$row['customer_contact'];
		$employeeNo=$row['employee_no'];
		$employeeName=$row['employee_name'];
		$employeeContact=$row['employee_phone'];
		$discount=$row['discount'];
		$vat=$row['vat'];
		$cashGiven=$row['cash_given'];
        
      
        
		$cashBack=$row['cash_back'];
		echo "
		<br>
		<div id='leftDiv'>Bill No: $invoiceId</div>
		<div id='rightDiv'>Date: $sellingDate</div>
		<hr>
		<div id='leftDiv70'>
		<b>Customer Information</b><br>
		Customer name: $customerName<br>
		Customer contact: $customerContact<br>
		</div>

		<div id='rightDiv30'>
		<b>Salesman Information</b><br>
		Employee No: $employeeNo<br>
		Employee name: $employeeName<br>
		Employee contact: $employeeContact<br>
		</div>

		
		<div id='billTable'>
		<h4><p align='center'><b>Product details</b></p></h4>
		
		";

		$sql="SELECT * FROM sales JOIN products ON sales.product_id=products.product_id WHERE invoice_id='$invoiceId'";
		$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));		
		}
		echo "
		<table class='table table-responsive sortable'>
			<thead>
				<tr>
					<td>Product ID</td>
					<td>Product Name</td>
					<td>Size</td>
					<td>Unit Price</td>
					<td>Quantity</td>
					<td>Total Price</td>
				</tr>
			</thead>
			<tbody>
		";
		$sum=0;
		while($row=mysqli_fetch_array($result)){
			$productId=$row['product_id'];
			$productName=$row['product_name'];
			$productType=$row['product_type'];
			$productCategory=$row['product_category'];
			$productSize=$row['product_size'];
			$productPrice=$row['product_price'];
			$quantity=$row['quantity'];
			$total=$productPrice*$quantity;
			$sum+=$total;
			if($productSize===""){
				$productSize="N/A";
			}
			$sql2="SELECT type_name FROM types WHERE type_id='$productType'";
			$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
			if (!$result2) {
				die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
			}
			$row2=mysqli_fetch_array($result2);
			$productTypeName=$row2['type_name'];
			if($productTypeName===null)
				$productTypeName="N/A";

			$sql2="SELECT category_name FROM categories WHERE category_id='$productCategory'";
			$result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
			if (!$result2) {
				die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
			}
			$row2=mysqli_fetch_array($result2);
			$productCategoryName=$row2['category_name'];
			if($productCategoryName===null)
				$productCategoryName="N/A";
			
			echo "
				<tr>
					<td>$productId</td>
					<td>$productName</td>
					<td>$productSize</td>
					<td>$productPrice</td>
					<td>$quantity</td>
					<td>$total</td>					
				</tr>
			";
		}
echo "
			</tbody>
		</table>
		<hr>
		<div id='billTotal'>";

		$subTotal=$sum;
		$sum-=$returnAmount;
		//$totalDiscount=ceil($sum*$discount/100);
		//$totalVat=ceil(($sum-$totalDiscount)*$vat/100);
		$totalDiscount=($sum*$discount/100);
		$totalVat=(($sum-$totalDiscount)*$vat/100);
		$finalSum=$sum-$totalDiscount+$totalVat;
		$cashBack=$cashGiven-$finalSum;
          if ($cashGiven == $finalSum){
                       ?>
                            <script>
                            
                                     alert("The Customer Paid In Full. You Do Not Need This");
                                            window.location='bill.php';
                                     
                            </script>
                       <?php
                       exit;
        }
		if($returnAmount>0){
			echo "
			Sub total: $subTotal<br>
			Refund amount (Bill# $returnBillId): $returnAmount<br>
			";
		}else{
			echo "
			Sub total: $subTotal<br>
			";
		}

		if($totalDiscount>0 && $totalVat>0){
			echo "
			Discount: $totalDiscount<br>
			VAT: $totalVat<br>
			<hr>
			";
		}else if($totalDiscount>0){
			echo "
			Discount: $totalDiscount<br>
			<hr>
			";
		}else if($totalVat>0){
			echo "
			VAT: $totalVat<br>
			<hr>			
			";
		}
         
		echo "
			Total: $finalSum<br>
			<hr>
			Paid: $cashGiven<br>
			Bill: $finalSum<br>
			Return: $cashBack<br>
		</div>
		</div><br><br> ";
            if ($cashGiven < $total){
          echo "<font color='green' size='+1'>Kindly Enter The Amount The Customer Is Balancing You With: </font>";
          }
          
 

			

	}
	function showTitle(){
	    require 'myConnection.php';
	    $sql="SELECT company_name FROM company";
	    $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	    if (!$result) {
	        die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
	    }
	    $row=mysqli_fetch_array($result);
	    $companyName=$row['company_name'];

	    echo $companyName;
  	}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Balancing Up</title>  
  <link rel="stylesheet" type="text/css" href="apiFiles/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="apiFiles/bootstrap-theme.css">
  <script type="text/javascript" src="apiFiles/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="apiFiles/bootstrap.js"></script>
  <script type="text/javascript" src="apiFiles/bootbox.js"></script>

  <link rel="icon" href="images/icon.ico">
  <link rel="stylesheet" type="text/css" href="css/pageStyle.css">
  <script type="text/javascript" src="scripts/myscripts.js"></script>

</head>

<body>
	<div>
	<form method='post'>
    <input type='hidden' value='<?php echo $invoiceId; ?>' name='id' />
    <input type='hidden' value='<?php echo $cashGiven; ?>' name='prev' />
                                                               
           <input type='number' required placeholder='<?php echo ($total - $cashGiven); ?>' max='<?php echo ($total - $cashGiven); ?>' class='form-control' name='amt'/>
           <input type='submit' class='btn btn-success'/>
    </form>
	</div>	
</body>

</html>

