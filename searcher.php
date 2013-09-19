<?php
//should work in projection
global $server_name;
$server_name = $_SERVER['SERVER_NAME'];
$google_site = "";
$search_text = $_POST['searchwhat'];
$search_page_url = "search.php";

if($_REQUEST['searchwhat'] == 'people'){
include 'classes/ldap.php';
} 
elseif (!isset($_REQUEST['googleseachTerm'])){
{				
echo "<br /><div class='search'><div class='searchText'>";					
echo '<form name="googles" method="POST" action="' . $search_page_url . '"><input type="search" name="googleseachTerm" size="32" maxlength="256" value=""><br/><button class="btn btn-primary" type="submit">Search</button>';
echo '<br /><label class="radio inline"><input name="searchwhat" type="radio" value="LLNL" />Search All Related</label> <label class="radio inline"><input name="searchwhat" type="radio" value="site" checked />' . $server_name . '</label></form><br />';
echo "</div></div>";
}	
}
else {
ini_set('display_errors',1);
error_reporting(E_ALL|E_STRICT);
$googleServer = 'http://www.google.com/cse?cx=009301355623050099834%3Ajniyelotvcy';//$google_server;
global $googleSearchSite;
$googleSearchSite = $server_name;
global $googleSite;
$googleSite = $google_site;
global $searchText;
$searchText = $search_text;
global $googleseachTerm;
global $googlePageStart;
global $searchPageUrl;
$searchPageUrl = $search_page_url;
global $searchWhat;
if(isset($_REQUEST['searchwhat'])){
$searchWhat = trim(htmlspecialchars(strip_tags($_REQUEST['searchwhat'])));
}
else{
$searchWhat = 'site';
}

if(isset($_REQUEST['googleseachTerm'])){
$googleseachTerm = urlencode(trim(htmlspecialchars(strip_tags($_REQUEST['googleseachTerm']))));
}
if(isset($_REQUEST['googlePageStart'])){
$googlePageStart = $_REQUEST['googlePageStart']; 
}
else{
$googlePageStart = "0";
}

/*
//this is for the new google search - https://developers.google.com/custom-search/docs/xml_results?hl=en
//http://www.google.com/cse?cx=009301355623050099834%3Ajniyelotvcy&client=google-csbe&output=xml_no_dtd&q=query+terms
$googleBuilderString .= "&client=google-csbe";
$googleBuilderString .= "&output=xml_no_dtd"; 
$googleBuilderString .= "&cx=009301355623050099834%3Ajniyelotvcy"; 
$googleBuilderString .= "&ie=utf8&oe=utf8";
searchtype=image
*/
$googleBuilderString = "&q=" . $googleseachTerm;
$googleBuilderString .= "&client=google-csbe";
$googleBuilderString .= "&output=xml_no_dtd"; 
$googleBuilderString .= "&ie=utf8&oe=utf8";
$googleBuilderString .= ($searchWhat != 'LLNL' ? "&as_dt=i&as_sitesearch=" . $googleSearchSite : '');
$googleBuilderString .= "&start=" . $googlePageStart;

$googleQueryString = $googleServer . $googleBuilderString;

$Open = fopen($googleQueryString, "r");


function pager($found_count, $skip){
global $searchWhat;
global $searchPageUrl;
global $googleseachTerm;

$shown_count = 10;
$shown_page = 1;
$skip_counts = array();
$counter = 0;
$radius = 2;
$display = '';
$prev = '';
$next = '';
$first = '';
$last = '';
$lower = 0;
$upper = 0;
$out = '';

if($found_count > $shown_count){
//currently range is set at 5, but will add dynamic changes based on larger results sets later
$range = 5;
$radius = floor($range / 2);

//calculate number of pages
$pages = $found_count / $shown_count;
$found_count % $shown_count > 0 ? $pages = $pages + 1 : '';

//calculate skip count for each page
for($i=0; $i<$pages; $i++){
$skip_counts[] = $counter;
$counter = $counter + $shown_count;
}
// find the current page
$shown_page = array_search($skip, $skip_counts);
$shown_page++;

// determine range of pages to show
$lower = $skip - ($shown_count * $radius);
$upper = $skip + ($shown_count * $radius);

//echo 'lower: ' . $lower . ' upper: ' . $upper;

// find previous/next, first/last links
if($shown_page > 1){
$prev = '<li><a href="' . $searchPageUrl . '?googlePageStart=' . ($skip - $shown_count) . '&googleseachTerm=' . $googleseachTerm . 
($searchWhat == 'LLNL' ? '&searchwhat=LLNL' : '') . '">&lt;</a></li>';
$first = '<li><a href="' . $searchPageUrl . '?googlePageStart=0&googleseachTerm=' . $googleseachTerm . 
($searchWhat == 'LLNL' ? '&searchwhat=LLNL' : '') . '">&lt;&lt;</a></li>';
}
if($shown_page < count($skip_counts)){
$next = '<li><a href="' . $searchPageUrl . '?googlePageStart=' . ($skip + $shown_count) . '&googleseachTerm=' . $googleseachTerm . 
($searchWhat == 'LLNL' ? '&searchwhat=LLNL' : '') . '">&gt;</a></li>';
$last = '<li><a href="' . $searchPageUrl . '?googlePageStart=' . end($skip_counts) . '&googleseachTerm=' . $googleseachTerm . 
($searchWhat == 'LLNL' ? '&searchwhat=LLNL' : '') . '">&gt;&gt;</a></li>';							
}

// generate individual page nav links
$count_skip = count($skip_counts);
for($i=0; $i<$count_skip; $i++){
$loop_value = $skip_counts[$i];
$loop_count = $i + 1;
if($loop_value >= $lower && $loop_value <= $upper){
$display .= ($shown_page == $loop_count ? '<li class="active">' : '<li>');				
$display .= '<a href="' . $searchPageUrl . '?googlePageStart=' . $loop_value . '&googleseachTerm=' . $googleseachTerm . 
($searchWhat == 'LLNL' ? '&searchwhat=LLNL' : '') . '">' . $loop_count . '</a></li>';
}
}

$out = '<div class="pagination"><ul>' . $first . $prev . $display . $next . $last . '</ul></div>';
echo $out;
}//end if more found than shown
}

function resultMuncher($resultXML)
{		
global $googleSearchSite;
global $googleseachTerm;
global $googlePageStart;
global $searchPageUrl;
global $searchWhat;
global $searchText;
global $resultCount;
global $server_name;

echo "<br>";	
$resultCount;

$dom = new DOMDocument();
$dom->loadXML($resultXML);
$x = $dom->documentElement;
$res = '';

foreach ($x->childNodes AS $value)							
{      		
if ($value->nodeName == "RES")
{
$res = $value->nodeValue; 						
}														
}						
if($res != '')
{

}
else
{				
echo "<div class='search'><div class='searchtext'>";					
echo '<form name="googles" method="POST" action="' . $searchPageUrl . '"><input type="search" name="googleseachTerm" size="32" maxlength="256" value="' . $googleseachTerm . '"><br/><button class="btn btn-primary" type="submit">Search</button>';
echo '<br /><label class="radio inline"><input name="searchwhat" type="radio" value="LLNL"' . ($searchWhat == 'LLNL' ? ' checked="checked"' : '') . '/>Search All Related</label> <label class="radio inline"><input name="searchwhat" type="radio" value="site"' . ($searchWhat != 'LLNL' ? ' checked="checked"' : '') . ' />' . $server_name . '</label></form><br />';		
echo "<p>Searched for <b>" . $googleseachTerm . ($searchWhat != 'LLNL' ? " site:" . $googleSearchSite : '') . "</b></p>";						
echo "</div></div>";		
echo "<div class='searchBox'><div class='searchDesc'><h2>Your search - " . urldecode($googleseachTerm) . " - did not match any documents.</h2>Suggestions:<br /><br />Make sure all words are spelled correctly.<br />Try different keywords.<br />Try more general keywords.</div></div>";
}																				
foreach ($x->childNodes AS $node) 
{					
if($node->nodeName == "TM")
{
$searchTime = $node->nodeValue;			
}
if($value->nodeName == "Spelling")
{

}		
if($node->nodeName == "RES")
{									
$searchStartNum = $node->getAttribute('SN');
$searchEndNum = $node->getAttribute('EN');						

foreach($node->childNodes as $subnode) 
{						
$subnodestring = $subnode->nodeName;

switch ($subnodestring) 
{							
case "R":										

$resultMimeType = $subnode->getAttribute('MIME');									
$resultLink = "";
$resultTitle = "";		
$resultRank = "";
$resultDesc = "";
$resultDate = "";
$htmlString = "";

foreach($subnode->childNodes as $subsubnode) 
{													
$subsubnodestring = $subsubnode->nodeName;							

switch ($subsubnodestring)
{
case "U":
$resultLink = $subsubnode->nodeValue;
break;
case "T":
$resultTitle = $subsubnode->nodeValue;
break;	
case "RK":
$resultRank = $subsubnode->nodeValue;
break;	
case "S":
$resultDesc = $subsubnode->nodeValue;
break;
/*	case "FS":
$resultDate = $subsubnode->getAttribute('VALUE');	
break;	*/		 																																						
}							
}	

$htmlString .= "<div class='searchBox'>";
$htmlString .= "<div class='searchTitle'><a href='" . $resultLink . "'>".$resultTitle."</a></div>";					
$htmlString .= "<div class='searchDesc'><div class='searchNote'>" . $resultLink;
if($resultMimeType != ''){
$htmlString .= " (" . $resultMimeType . ")";
}
$htmlString .=  "</div>" . $resultDate . " " . $resultDesc . "</div>";
$htmlString .= "</div><br />";																		
echo $htmlString;

break;

case "M":				   
$resultCount =  $subnode->nodeValue; 	

$newStartNum = $googlePageStart + 10;
$prevStartNum = $googlePageStart - 10;

echo "<div class='search'><div class='searchtext'>";						
echo '<form name="googles" method="POST" action="' . $searchPageUrl . '"><input type="search" name="googleseachTerm" class="input" size="32" maxlength="256" value="' . $googleseachTerm . '" /><br/><button class="btn btn-primary" type="submit">Search</button><input name="searchwhat" type="hidden" value="' . $searchWhat . '" />';
echo '<br /><label class="radio inline"><input name="searchwhat" type="radio" value="LLNL"' . ($searchWhat == 'LLNL' ? ' checked="checked"' : '') . '/>Search All Related</label> <label class="radio inline"><input name="searchwhat" type="radio" value="' . $server_name . '"' . ($searchWhat != 'LLNL' ? ' checked="checked"' : '') . ' />' . $server_name . '</label></form><br />';														
echo "<p>Searched for <b>" . $googleseachTerm . ($searchWhat != 'LLNL' ? " site:" . $googleSearchSite : '') . "</b> - Results " . $searchStartNum . " - " . $searchEndNum . " of about " . $resultCount . ($resultCount > 100 ? ' (only top 100 given) ' : '') . "</p>";											
echo "</div></div>";

echo '<div class="searchBox">';
$resultCount = ($resultCount > 100 ? 100 : $resultCount);
pager($resultCount, $googlePageStart);
echo '</div>';

break;													
}								  
}											
}							
}
echo "<br><br>";		
}

if($Open){			
resultMuncher(file_get_contents($googleQueryString));
if($searchWhat == 'site'){
$__siteSearch = '.trackSiteSearch("' . $googleseachTerm . '", false, ' . $resultCount . ');
';
} else {
$__LLNLsearch = '.trackSiteSearch("' . $googleseachTerm . '", false, ' . $resultCount . ');
';
}
}

}//end searchwhat
?>