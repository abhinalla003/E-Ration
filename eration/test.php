<thead>
            <tr>
                <th>SR No.</th>
                <th>Stock ID</th>
                <th>Stock Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($rows as $row)
            {
            ?>
            <tr>
                <td data-label="SR No."><?php echo $n; ?></td>
                <td data-label="Stock ID"><?php echo $row['stock_id']; ?></td>
                <td data-label="Stock Name"><?php echo $row['stock_name']; ?></td>
                <td data-label="Quantity"><?php echo $row['quantity']; ?></td>
                <td data-label="Price"><?php echo $row['stock_price']; ?></td>
            </tr>
                <?php
                $total_amount=$row['stock_price']+$total_amount;
                $n=$n+1;
                }
                ?>
            <tr>
                <td colspan="4"><b>Total</b></td>
                <td><b><?php echo $total_amount; 
                $_SESSION['total_amount']=$total_amount;
                ?></b></td>
            </tr>
            <tr>
                <td colspan="4"><b>Payment</b></td>
                <td><b><?php echo $receipt_info['state']; ?></b></td>
            </tr>
        </tbody>
    </table>
        <button type="submit" style="font-size:24px;margin-left: 38%;
        margin-top:10px;margin-bottom: 10px;background-color: #0A2558;color: white;">
        <a href="customer.php" style="text-decoration: none;cursor: default;">Home</a></button>
        <button type="submit" onclick="myFunction()" id="printpagebutton" style="font-size:24px;margin-left: 10%;
        margin-top:10px;margin-bottom: 10px;background-color: #0A2558;color: white;">Print <i class="material-icons"></i></button>
		<script>
			function myFunction() {
				var printButton = document.getElementById("printpagebutton");
					
					printButton.style.visibility = 'hidden';
					
					window.print()
					printButton.style.visibility = 'visible';
			}
		</script>
    </body>
  </html>