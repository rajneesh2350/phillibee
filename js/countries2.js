

var country_arr = new Array("Select","Assam", "Andhra Pradesh", "Bihar", "Chhattisgarh", "Delhi", "Gujarat", "Haryana", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Odisha", "Punjab", "Rajasthan", "Tamil Nadu", "Telangana", "Uttarakhand", "U.P East", "U.P West", "West Bengal");
var jobs_arr = new Array("Select","Accounts & Finance", "HR & Admin", "IT & Networking", "Operation", "RMA & Service", "Sales & Marketing", "Warehouse & Logistic", "Solution Design", "Technical");

var s_a = new Array();
s_a[0] = "Select Location";
s_a[1] = "Select Location|Guwahati";
s_a[2] = "Select Location|Vijayawada|Vishakapptnam";
s_a[3] = "Select Location|Patna";
s_a[4] = "Select Location|Bilaspur|Raipur";
s_a[5] = "Select Location|Delhi";
s_a[6] = "Select Location|Ahmedabad|Surat|Vodadara|Rajkot|Vadodara";
s_a[7] = "Select Location|Gurgaon|GT BELT|Faridabad";
s_a[8] = "Select Location|Ranchi";
s_a[9] = "Select Location|Bangalore|Mysore|Hubli|Belgaum";
s_a[10] = "Select Location|Cochin";
s_a[11] = "Select Location|Indore|Jabalpur|Bhopal|Gwalior";
s_a[12] = "Select Location|Mumbai|Nagpur|Pune";
s_a[13] = "Select Location|Bhubneshwar";
s_a[14] = "Select Location|Ludhiana|Chandigarh|Bathinda|Jalandhar|Amritsar";
s_a[15] = "Select Location|Jaipur|Udaipur|Kota|Jodhpur|Hanumangarh|Bikaner|Ajmer|Jodhpur";
s_a[16] = "Select Location|Chennai|Coimbatore|Madurai|Pondicherry|Madurai Trichy";
s_a[17] = "Select Location|Hyderabad";
s_a[18] = "Select Location|Dehradun|Haldwani";
s_a[19] = "Select Location|Lucknow|Varasani|Gorakhpur|Kanpur";
s_a[20] = "Select Location|Ghaziabad|Bareilly|Agra";
s_a[21] = "Select Location|Kolkata|Silliguri";

var v_a = new Array();
v_a[00] = "Select position";
v_a[1] = "Select position|Accounts Manager|Sr.Accountant|Sr.Accountants Executive|Accounts Executive|Accountant|Accountant Assistant|Credit Control Executive";
v_a[2] = "Select position|HR Manager|Asst Manager HR|Admin Executive|Front Desk";
v_a[3] = "Select position|Sr.Software Developer/Sr.Software Engineer|Web Designer/ Sr. Web Designer|Graphic Designer|Sr. SEO Executive/ SEO executive|Content Writer";
v_a[4] = "Select position|Sr.MIS Executive|Sales Coordinator|Executive Assistant";
v_a[5] = "Select position|National Head RMA|RMA Manager|Asst Manager RMA|RMA Incharge|RMA Coordinator|Service Engineer|Engineer|Repair Engineer";
v_a[6] = "Select position|Product Manager|Regional Sales Manager|Sales Manager|Business Development Manager|Area Sales Manager|Asst Manager Sale|Business Development Executive|Sales Executive|TeleMarketing Executive/ Tele Sales Executive";
v_a[7] = "Select position|Store Manager|Asst Manager Store|Store Incharge / Store Officer|Sr.Store Executive|Store Executive";
v_a[8] = "Select position|Pre Sales Engineer|Tender Executive";
v_a[9] = "Select position|Technical Manager|Technical Support Engineer|Technical Engineer|Engineer|Asst Engineer";



function retprint_state() {
    return country_arr;
}
function print_state(state_index){

    var x, i = 0; state_index;

	var state_arr = s_a[state_index].split("|");
	return state_arr
}
	
	
	
	
function retprint_job() {
   return jobs_arr;
}
function print_job(state_index){

   var x, i = 0; state_index;

	var job_arr = v_a[state_index].split("|");
	return job_arr
}
	
/*	Author's Blog: bdhacker.wordpress.com	*/  