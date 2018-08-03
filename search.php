




<html>
<head>
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet"  href="styleSEARCH.css">

<script>

// states
var state_arr = new Array("Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat","Island", "Haryana", "Himachal Pradesh", "Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Pondicherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttar Pradesh","Uttaranchal","West Bengal" );


// city
var c_a = new Array();
c_a[0] = "";

c_a[1] = "Nicobar|North and Middle Andaman|South Andaman";

c_a[2] = "Rangareddy|	East Godavari|Guntur|Krishna|Visakhapatnam|Chittoor|	Anantapur|	Kurnool	|	Mahbubnagar	|Hyderabad|	West Godavari|	Karimnagar| Warangal|Nalgonda|Prakasam|	Medak |Sri Potti Sriramulu Nellore	|YSR	|Khammam	|Adilabad	|Srikakulam	|Nizamabad|Vizianagaram";

c_a[3] = " Anjaw | Changlang | Dibang Valley | East Kameng | East Siang | Kurung Kumey | Lohit | Lower Dibang Valley | Lower Subansiri | Papum Pare | Tawang | Tirap | Upper Siang | Upper Subansiri | West Kameng | West Siang";

c_a[4]= " Baksa | Barpeta | Bongaigaon | Cachar|Chirang | Darrang | Dhemaji | Dhubri|Dibrugarh |Dima Hasao | Goalpara | Golaghat| Hailakandi | Jorhat | Kamrup | Kamrup Metropolitan | Karbi Anglong | Karimganj | Kokrajhar| Lakhimpur | Morigaon| Nagaon| Nalbari| Sivasagar |Sonitpur |Tinsukia|Udalguri";

c_a[5] = " Araria | Arwal | Aurangabad | Banka | Begusarai | Bhagalpur | Bhojpur |Buxar |Darbhanga | Gaya |Gopalganj |Jamui | Jehanabad | Kaimur | Katihar | Khagaria | Kishanganj | Lakhisarai |Madhepura | Madhubani | Munger | Muzaffarpur| Nalanda| Nawada | Pashchim Champaran | Patna | Purba Champaran | Purnia | Rohtas | Saharsa |Samastipur | Saran |Sheikhpura | Sheohar | Sitamarhi | Siwan | Supaul| Vaishali";

c_a[6] = "Chandigarh";

c_a[7] = "Bastar |Bijapur |Bilaspur | Dakshin Bastar Dantewada|Dhamtari | Durg | Janjgir Champa 8. Jashpur 9. Kabeerdham| Korba |Koriya | Mahasamund | Narayanpur | Raigarh | Raipur |Rajnandgaon | Surguja | Uttar Bastar Kanker";

c_a[8] = "Dadra & Nagar Haveli";
c_a[9] = " Daman | Diu";
c_a[10] = " Central Delhi | East Delhi | New Delhi| North Delhi | North East Delhi | North West Delhi | South Delhi | South West Delhi| West Delhi";
c_a[11] = ". North Goa | South Goa";
 c_a[12]= "Ahmadabad | Amreli | Anand | Banas Kantha | Bharuch | Bhavnagar | Dohad| Gandhinagar |Jamnagar | Junagadh | Kachchh| Kheda | Mahesana | Narmada | Navsari | Panch Mahals | Patan| Porbandar | Rajkot | Sabar Kantha | Surat |Surendranagar| Tapi | The Dangs | Vadodara | Valsad";
c_a[13]="island";


c_a[14] = "Ambala | Bhiwani | Faridabad | Fatehabad | Gurgaon | Hisar | Jhajjar| Jind | Kaithal | Karnal | Kurukshetra | Mahendragarh | Mewat | Palwal | Panchkula | Panipat | Rewari | Rohtak | Sirsa | Sonipat | Yamunanagar";

c_a[15]="Bilaspur | Chamba | Hamirpur | Kangra | Kinnaur | Kullu | Lahul & Spiti | Mandi | Shimla | Sirmaur | Solan |Una";

c_a[16]="Anantnag | Badgam | Bandipore | Baramula | Doda | Ganderbal | Jammu | Kargil | Kathua | Kishtwar | Kulgam | Kupwara | Leh | Pulwama | Punch | Rajouri | Ramban | Reasi | Samba |Shupiyan | Srinagar | Udhampur";

c_a[17]="Bokaro| Chatra | Deoghar | Dhanbad | Dumka | Garhwa | Giridih | Godda | Gumla | Hazaribagh | Jamtara | Khunti | Kodarma | Latehar | Lohardaga| Pakur | Palamu | Pashchimi Singhbhum | Purbi Singhbhum |Ramgarh | Ranchi | Sahibganj | Saraikela Kharsawan | Simdega";

c_a[18]=". Bagalkot | Bangalore | Bangalore Rural | Belgaum | Bellary | Bidar | Bijapur | Chamarajanagar | Chikkaballapura | Chikmagalur | Chitradurga | Dakshina Kannada | Davanagere | Dharwad | Gadag | Gulbarga | Hassan | Haveri |Kodagu | Kolar | Koppal | Mandya|Mysore | Raichur | Ramanagara | Shimoga | Tumkur | Udupi | Uttara Kannada | Yadgir";

c_a[19]=" Alappuzha | Ernakulam |Idukki | Kannur | Kasaragod | Kollam | Kottayam | Kozhikode |Malappuram | Palakkad | Pathanamthitta | Thiruvananthapuram|Thrissur | Wayanad";
c_a[20]="Lakshadweep";

c_a[21]=" Alirajpur | Anuppur | Ashoknagar | Balaghat | Barwani | Betul | Bhind | Bhopal | Burhanpur | Chhatarpur | Chhindwara | Damoh | Datia | Dewas | Dhar | Dindori | Guna | Gwalior | Harda | Hoshangabad | Indore | Jabalpur | Jhabua| Katni | Khandwa |Khargone |Mandla | Mandsaur | Morena | Narsimhapur | Neemuch | Panna | Raisen | Rajgarh | Ratlam | Rewa | Sagar | Satna | Sehore | Seoni | Shahdol | Shajapur | Sheopur | Shivpuri | Sidhi | Singrauli | Tikamgarh | Ujjain | Umaria | Vidisha";

c_a[22]="Ahmadnagar | Akola | Amravati | Aurangabad |Bhandara | Bid |Buldana |Chandrapur | Dhule | Gadchiroli| Gondiya | Hingoli | Jalgaon | Jalna | Kolhapur | Latur | Mumbai | Mumbai Suburban | Nagpur | Nanded | Nandurbar | Nashik | Osmanabad | Parbhani | Pune | Raigarh|Ratnagiri | Sangli | Satara | Sindhudurg | Solapur| Thane | Wardha | Washim |Yavatmal";

c_a[23]=" Bishnupur | Chandel | Churachandpur | Imphal East | Imphal West |Senapati | Tamenglong | Thoubal | Ukhrul";
c_a[24]=" East Garo Hills | East Khasi Hills | Jaintia Hills | Ribhoi | South Garo Hills | West Garo Hills |West Khasi Hills";

c_a[25]="Aizawl |Champhai | Kolasib | Lawngtlai | Lunglei | Mamit |Saiha | Serchhip";
c_a[26]=" Dimapur | Kiphire | Kohima | Longleng | Mokokchung | Mon | Peren | Phek | Tuensang | Wokha | Zunheboto";

c_a[27]=" Anugul | Balangir | Baleshwar | Bargarh | Baudh | Bhadrak | Cuttack | Debagarh | Dhenkanal | Gajapati | Ganjam |Jagatsinghapur | Jajapur | Jharsuguda | Kalahandi |Kandhamal | Kendrapara | Kendujhar | Khordha | Koraput | Malkangiri | Mayurbhanj | Nabarangapur | Nayagarh | Nuapada | Puri | Rayagada | Sambalpur | Subarnapur | Sundargarh";

c_a[28]=" Karaikal | Mahe | Puducherry | Yanam";

c_a[29]=" Amritsar | Barnala | Bathinda | Faridkot | Fatehgarh Sahib | Firozpur | Gurdaspur |Hoshiarpur | Jalandhar | Kapurthala |Ludhiana | Mansa | Moga | Muktsar | Patiala | Rupnagar | Sahibzada Ajit Singh Nagar| Sangrur | Shahid Bhagat Singh Nagar | Tarn Taran";

c_a[30]=" Ajmer | Alwar |Banswara | Baran | Barmer | Bharatpur | Bhilwara| Bikaner | Bundi |Chittaurgarh | Churu| Dausa |Dhaulpur | Dungarpur | Jaipur | Jaisalmer |Jalor |Jhalawar | Jhunjhunun | Jodhpur | Karauli | Kota | Nagaur | Pali | Pratapgarh | Rajsamand | Sawai Madhopur | Sikar| Sirohi |Tonk | Udaipur";

c_a[31]="East District | North District | South District | West District";

c_a[32]=" Ariyalur | Chennai | Coimbatore |Cuddalore | Dharmapuri | Dindigul | Erode | Kancheepuram | Kanniyakumari | Karur | Krishnagiri | Madurai | Nagapattinam | Namakkal | Perambalur | Pudukkottai | Ramanathapuram | Salem | Sivaganga | Thanjavur | The Nilgiris | Theni | Thiruvallur | Thiruvarur |Thoothukkudi | Tiruchirappalli | Tirunelveli | Tiruppur | Tiruvannamalai | Vellore| Viluppuram | Virudhunagar";

c_a[33]=" Dhalai | North Tripura | South Tripura | West Tripura";

c_a[34]=" Agra | Aligarh | Allahabad | Ambedkar Nagar | Auraiya | Azamgarh | Baghpat | Bahraich | Ballia | Balrampur | Banda | Bara Banki | Bareilly | Basti |Bijnor | Budaun| Bulandshahr | Chandauli | Chitrakoot | Deoria| Etah | Etawah | Faizabad | Farrukhabad | Fatehpur | Firozabad | Gautam Buddha Nagar | Ghaziabad | Ghazipur | Gonda | Gorakhpur | Hamirpur |Hardoi | Jalaun | Jaunpur | Jhansi | Jyotiba Phule Nagar | Kannauj | Kanpur Dehat | Kanpur Nagar | Kanshiram Nagar | Kaushambi | Kheri | Kushinagar |Lalitpur | Lucknow | Mahamaya Nagar | Mahoba | Mahrajganj | Mainpuri | Mathura | Mau | Meerut | Mirzapur | Moradabad | Muzaffarnagar | Pilibhit | Pratapgarh | Rae Bareli | Rampur | Saharanpur | Sant Kabir Nagar | Sant Ravidas Nagar | Shahjahanpur | Shrawasti | Siddharthnagar | Sitapur | Sonbhadra | Sultanpur | Unnao | Varanasi";

c_a[35]="Bageshwar | Chamoli | Champawat | Dehradun | Garhwal | Hardwar |Nainital | Pithoragarh | Rudraprayag | Tehri Garhwal | Udham Singh Nagar | Uttarkashi";


c_a[36]="Bankura | Barddhaman | Birbhum | Dakshin Dinajpur | Darjiling | Haora |Hugli | Jalpaiguri | Koch Bihar | Kolkata | Maldah | Murshidabad | Nadia | North Twenty Four Parganas | Paschim Medinipur | Purba Medinipur | Puruliya | South Twenty Four Parganas | Uttar Dinajpur";



function populateCities(stateElementId, cityElementId) {

    var selectedStateIndex = document.getElementById(stateElementId).selectedIndex;

    var cityElement = document.getElementById(cityElementId);

    cityElement.length = 0; // Fixed by Julian Woods
    cityElement.options[0] = new Option('Select City', '');
    cityElement.selectedIndex = 0;

    var city_arr = c_a[selectedStateIndex].split("|");

    for (var i = 0; i < city_arr.length; i++) {
        cityElement.options[cityElement.length] = new Option(city_arr[i], city_arr[i]);
    }
}

function populateStates(stateElementId, cityElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var stateElement = document.getElementById(stateElementId);
    stateElement.length = 1;
	
    stateElement.options[1] = new Option('Andaman and Nicobar Islands',  '-1');
    stateElement.selectedIndex = 0;
    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (cityElementId) {
        stateElement.onchange = function () {
            populateCities(stateElementId, cityElementId);
        };
    }
}


</script> 
</head>
<body>



 <div id="header">
      <img src="h.png"   class="oo" />
        
     <h1 >Blood Bank  Management</h1>
  </div>





<div id="ib">
  <a href="#"><i class="fa fa-home"><b>HOME</b></font></i></a> 
  <a href="#"><i class="fa fa-search"><b>ABOUT US</b></i></a> 
  <a href="#"><i class="fa fa-envelope"><b>CONTACT US</b></i></a> 
  <a href="#"><i class="fa fa-globe"><b>SERVICES</b></i></a>
<?php echo "<a href=\"admin.php\"><i class=\"fa fa-user\"><b>ADMIN</b></i></a>"; ?>
<?php echo "<a href=\"registration.php\">   <i class=\"fa fa-user\"><b> REGISTER | LOGIN</b></i></a>"; ?>

</div>


<div class="myform">

   <form action="search.php"  method="post" onsubmit="myFunction()" >
                     
	                 <select name="c" class="box" >
			                      <option value="">India</option>
	                 </select>
		
	                <select name="state" id="state" class="box" required>
					
					
					<option value="">Select State</option>
				
			        </select>	
			
	                 <select name="city" id="city" class="box" required >
			                     <option value="">Select City/District</option>
	                 </select>
                    
					<script language="javascript">
                    populateStates("state", "city");
                    </script>
	 
	                <select name="list" class="box" required>
			             <option value="">Select Blood Group</option>
			             <option value="A+">A<SUP>+</SUP></option>
			             <option value="A-">A<SUP>-</SUP></option>
			             <option value="B+">B<SUP>+</SUP></option>
			             <option value="B-">B<SUP>-</SUP></option>
			             <option value="AB+">AB<SUP>+</SUP></option>
			             <option value="AB-">AB<SUP>-</SUP></option>
			             <option value="O+">O<SUP>+</SUP></option>
			             <option value="O-">O<SUB>-</SUB></option>
					</select>


<button> Search</button>



<?php
error_reporting(0);
if($_SERVER["REQUEST_METHOD"] == "POST"){
$state="";
$list="";

  try {
	  
	  
	  $g=$_POST['state'];
	  $i=$_POST['list'];
  $con= new PDO('mysql:host=localhost;dbname=mydb', "root", "");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
if(!empty($_POST['state'])&& !empty($_POST['list']))
{ 
 $query = "SELECT * FROM donors WHERE state='$g' AND bg='$i' ";
 
  
  
  //first pass just gets the column names
  print "<table> ";
  echo '<br>'; echo '<br>';
  $result = $con->query($query);
  //return only the first row (we only need field names)
   echo '<br>'; 
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> ";
  
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
  print " <tr> ";
  foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  
  print "</table> ";
  }
  
  
  } 
  
  catch(PDOException $e) {
  
  } // end try
 
}
       
   if(!$query){
                <div class="bk"></div>
              }
?>
</form>
</div>

</body>
</html>