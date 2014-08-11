<?php

class incometax
	{

		function calculator($type, $person, $res_status, $taxble_income)
		{
			echo "Type = $type<br>";
			echo "Person = $person<br>";
			echo "Residence = $res_status<br>";
			echo "Income = $taxble_income<br>";

			if($type == 'individual')
			{
				echo "You are individual<br>";

				if($person == 'male')
				{
					// Tax Calculations for Male

					if($taxble_income <= '200000')
					{
						echo "You don't want to pay tax";
					}
					elseif($taxble_income > '200000' && $taxble_income <= '500000')
					{
						
						echo "You are come under 2 to 5 Laks Slab";

						$taxble_income = $taxble_income - 200000;

						$devided_income = $taxble_income/100; 	

						$tax = $devided_income*10; 

						$edu_tax = ($tax/100)*2;

						$higher_edu_tax = ($tax/100)*1; 

						$total = $tax + $edu_tax + $higher_edu_tax;

						echo "<br>Tax = $tax";

						echo "<br>Education Tax = $edu_tax";

						echo "<br>Secoundary and Higher Education Tax = $higher_edu_tax";

						echo "<br>Total Tax = $total";


					}
					elseif ($taxble_income > '500000' && $taxble_income < '1000000') 
					{
						echo "You are come under 5 to 10 Laks Slab<br>";

						$taxble_income = $taxble_income - 500000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab( 2nd slab tax 30000 will be added manually)

						$tax = ($taxble_income/100)*20;

						$total_tax = $tax + 30000; // Tax for 5L< slab + 2 to 5L tax( 30000)

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";


					}
					else 
					{
						echo "You are come under 10+ Laks Slab";

						$taxble_income = $taxble_income - 1000000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab + 5L for 3rd slab ( 2nd & 3rd slab tax 30000 + 100000 will be added manually)

						$tax = ($taxble_income/100)*30;

						$total_tax = $tax + 130000; // Tax for 10L< slab + 2nd and 3rd slab tax

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";
					}

				}
				// Tax calculation for Female

				elseif($person == 'female')
				{
					echo "You are Female";
					if($taxble_income <= '200000')
					{
						echo "You don't want to pay tax";
					}
					elseif($taxble_income > '200000' && $taxble_income <= '500000')
					{
						
						echo "You are come under 2 to 5 Laks Slab";

						$taxble_income = $taxble_income - 200000;

						$devided_income = $taxble_income/100; 	

						$tax = $devided_income*10; 

						$edu_tax = ($tax/100)*2;

						$higher_edu_tax = ($tax/100)*1; 

						$total = $tax + $edu_tax + $higher_edu_tax;

						echo "<br>Tax = $tax";

						echo "<br>Education Tax = $edu_tax";

						echo "<br>Secoundary and Higher Education Tax = $higher_edu_tax";

						echo "<br>Total Tax = $total";


					}
					elseif ($taxble_income > '500000' && $taxble_income < '1000000') 
					{
						echo "You are come under 5 to 10 Laks Slab<br>";

						$taxble_income = $taxble_income - 500000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab( 2nd slab tax 30000 will be added manually)

						$tax = ($taxble_income/100)*20;

						$total_tax = $tax + 30000; // Tax for 5L< slab + 2 to 5L tax( 30000)

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";


					}
					else 
					{
						echo "You are come under 10+ Laks Slab";

						$taxble_income = $taxble_income - 1000000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab + 5L for 3rd slab ( 2nd & 3rd slab tax 30000 + 100000 will be added manually)

						$tax = ($taxble_income/100)*30;

						$total_tax = $tax + 130000; // Tax for 10L< slab + 2nd and 3rd slab tax

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";
					}
				}

				// Calculations for Senior Citizens

				elseif($person == "senior_citizen")
				{
					echo "You are senior citizen<br>";

					if($taxble_income <= '300000')
					{
						echo "You don't want to pay tax<br>";
					}
					elseif($taxble_income > '300000' && $taxble_income <= '500000')
					{
						
						echo "You are come under 3 to 5 Laks Slab";

						$taxble_income = $taxble_income - 300000; // Rebate for 3 laks.

						$devided_income = $taxble_income/100; 	

						$tax = $devided_income*10; 

						$edu_tax = ($tax/100)*2;

						$higher_edu_tax = ($tax/100)*1; 

						$total = $tax + $edu_tax + $higher_edu_tax;

						echo "<br>Tax = $tax";

						echo "<br>Education Tax = $edu_tax";

						echo "<br>Secoundary and Higher Education Tax = $higher_edu_tax";

						echo "<br>Total Tax = $total";


					}
					elseif ($taxble_income > '500000' && $taxble_income < '1000000') 
					{
						echo "You are come under 5 to 10 Laks Slab<br>";

						$taxble_income = $taxble_income - 500000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab( 2nd slab tax 30000 will be added manually)

						$tax = ($taxble_income/100)*20;

						$total_tax = $tax + 30000; // Tax for 5L< slab + 2 to 5L tax( 30000)

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";


					}
					else 
					{
						echo "You are come under 10+ Laks Slab";

						$taxble_income = $taxble_income - 1000000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab + 5L for 3rd slab ( 2nd & 3rd slab tax 30000 + 100000 will be added manually)

						$tax = ($taxble_income/100)*30;

						$total_tax = $tax + 130000; // Tax for 10L< slab + 2nd and 3rd slab tax

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";
					}
				}

				// Calculations for Super Senior Citizens

				else
				{
					echo "You are Super Senior Citizen";

					if($taxble_income <= '500000')
					{
						echo "You don't want to pay tax";
					}
					
					elseif ($taxble_income > '500000' && $taxble_income < '1000000') 
					{
						echo "You are come under 5 to 10 Laks Slab<br>";

						$taxble_income = $taxble_income - 500000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab( 2nd slab tax 30000 will be added manually)

						$tax = ($taxble_income/100)*20;

						$total_tax = $tax + 30000; // Tax for 5L< slab + 2 to 5L tax( 30000)

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";


					}
					else 
					{
						echo "You are come under 10+ Laks Slab";

						$taxble_income = $taxble_income - 1000000;  // Reduct 2L for Non-Taxable + 3L for 2nd slab + 5L for 3rd slab ( 2nd & 3rd slab tax 30000 + 100000 will be added manually)

						$tax = ($taxble_income/100)*30;

						$total_tax = $tax + 130000; // Tax for 10L< slab + 2nd and 3rd slab tax

						$edu_tax = ($total_tax/100)*2;

						$higher_edu_tax = ($total_tax/100)*1;

						$total = $total_tax + $edu_tax + $higher_edu_tax;

						echo "Tax = $total_tax<br>";

						echo "Education Tax = $edu_tax<br>";

						echo "Higher Education Tax = $higher_edu_tax<br>";

						echo "Total = $total";
					}
				}
			}
			else
			{
				echo "You are comprates";
			}
		}
	}


?>
