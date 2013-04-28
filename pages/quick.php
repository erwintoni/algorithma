<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		quick.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.03.02
-->

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Quick Sort</h2>
		<br />

		<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="2" cellpadding="5"> 
					<tr height="5%" class="algo-table-top"> 
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls"> 
							<div style="float: left;" align="left" id="control-button-box">		
								<button id="s1"; onclick="this.disabled=true; InitializeTimer(); StartTheTimer()">Demo</button> 
								<button id="f1"; onclick="Forward()">Forward</button> 
								<button onClick="window.location.reload(); Res()">Reset</button> 
							</div> 

							<div style="float: right;" align="right" id="info-button-box"> 
								<button id="concept" onMouseOut="UnTip();">Concept</button> 
								<button id="howto" onMouseOut="UnTip();">How-to</button> 
							</div> 
						</td> 
				<!-- End Controls --> 
					</tr> 

					<tr height="90%" class="algo-table-middle"> 
				<!-- Begin Psuedo --> 
						<td width="25%" class="psuedocode" id="psuedocode"> 
	
							<div class="container"> 

								<ul class="tabs"> 
									<li><a href="#tab1">Pseudocode</a></li> 
									<li><a href="#tab2">C++</a></li> 
								</ul> 

								<div class="tab_container"> 
								
									<div id="tab1" class="tab_content" style="font-size:small;"> 						
							<div id="psuedoCode0"> 
	<strong>procedure</strong> quicksort(T[i..j])
</div> <br>

<div id="psuedoCode1"> 
	&nbsp;&nbsp;&nbsp;&nbsp;<strong>var</strong> list less, greater
</div> 
<div id="psuedoCode2"> 
	&nbsp;&nbsp;&nbsp;&nbsp;<strong>if</strong> length(T[i..j]) is 1 
</div> 
<div id="psuedoCode3"> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>return</strong> T[i..j]
</div> <br>

<div id="psuedoCode4"> 
	&nbsp;&nbsp;&nbsp;&nbsp;pivot <- T[i]
</div> <br>
<div id="psuedoCode8"> 
	&nbsp;&nbsp;&nbsp;&nbsp;<strong>for</strong> each x in array T[i..j]
</div> 
<div id="psuedoCode5"> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>if</strong> x is pivot <strong>then</strong> append x to less
</div> 
<div id="psuedoCode6"> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>else</strong> append x to greater
</div> <br>

<div id="psuedoCode7"> 
	&nbsp;&nbsp;&nbsp;&nbsp;<strong>return</strong><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quicksort(less)<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pivot<br> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quicksort(greater)
</div>  
										</div> 
									
									
							
 
									<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
void quickSort(int set[], int low, int high)
{
   int pivPoint;

   if (low < high)
   {
      pivPoint = partition(set, low, high);
      quickSort(set, low, pivPoint - 1);
      quickSort(set, pivPoint + 1, high);
   }
}

int partition(int set[], int low, int high)
{
   int pivVal, pivIndex, mid;

   mid = (low + high) / 2;
   swap(set[low], set[mid]);
   pivIndex = low;
   pivVal = set[low];
   for (int check = low + 1; check <= high; check++)
   {
      if (set[check] < pivVal)
      {
         pivIndex++;
         swap(set[pivIndex], set[check]);
      }
   }
   swap(set[low], set[pivIndex]);
   return pivIndex;
}

</pre>
									</div> 
								
								</div> 
							
							</div> 	
						
						</td> 
				<!-- End Psuedo --> 
 
				<!-- Begin View --> 
						<td colspan="5"> 
							
							<div id="workarea" class="workarea">							
								
								<div id="box5" class="box">5</div> 
								<div id="box0" class="box">0</div> 
								<div id="box8" class="box">8</div> 
								<div id="box3" class="box">3</div> 
								<div id="box9" class="box">9</div> 
								<div id="box6" class="box">6</div> 
								<div id="box1" class="box">1</div> 
								<div id="box7" class="box">7</div> 
								<div id="box2" class="box">2</div> 
								<div id="box4" class="box">4</div> 
								
								<div style="float: left;" align="center" id="box10" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box11" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box12" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box13" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box14" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box15" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box16" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box17" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box18" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box19" class="plain-box-style"></div> 
								
								<div id="box30" class="pivot">Pivot</div> 
								<div style="float: left;" align="center" id="box20" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box21" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box22" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box23" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box24" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box25" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box26" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box27" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box28" class="plain-box-style"></div> 
								<div style="float: left;" align="center" id="box29" class="plain-box-style"></div> 
							
							</div> 
						
						</td> 
				<!-- End View --> 
					</tr> 
				
				<!-- Begin Settings -->
				
					<tr height="20%" id="algo-table-bottom"></tr>
				
				<!-- End Settings -->
				
				</table>
		<!-- End Template Table -->
		<br/> <br/>
		
		</td>
	  </tr>
	</table>

<!-- End of php file -->
		</td>
	  </tr>
	</table>

