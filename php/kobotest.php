<?php 
if (isset($_POST["data"])){
	// create curl resource 
	$username="nset_bcipn";
	$password="nset/bcipn";
    $curl = curl_init();
    $data = $_POST["data"];
    //curl_setopt($curl, CURLOPT_URL, 'http://kc.kobotoolbox.org/api/v1/data/34137?format=json');
	curl_setopt($curl, CURLOPT_URL, 'http://kc.humanitarianresponse.info/api/v1/submissions');
	curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

	//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	
	curl_setopt($curl, CURLOPT_POSTFIELDS,$data);
	$resp = curl_exec($curl);
}
else echo '{"error":"NoData"}';



/*	$data='{"id":"DDA_comp",
	"submission":{
		"district":"Ramechhap",
		"municipality_vdc":"THO",
		"ward_no":"4",
		"tole":"Dorje",
		"building_ID":"TA629005",
		"age_of_building":"1",
		"footprint_area":"450",
		"num_of_storey":"2",
		"type_of_construction":"StoneInMud",
		"primary_occupancy":"Residential",
		"damage_grade":"Grade5",
		"num_of_occupants":"4",
		"member_injured_in_eathquake":"no",
		"member_killed_in_earthquake":"no",
		"location":"27.58898661 86.26042883 1940.357255 12",
		"meta":{
				"instanceID":"uuid:47c9d3f6-cc96-4630-aacd-641173840d55"
			}
		}
	}';
*/
?>

