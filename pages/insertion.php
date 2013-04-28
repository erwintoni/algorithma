<!--
	Name:		Wes Rockwood, Kenneth Williams, Team One
	Project:		{AlgorithmA}; 2011
	File:		insertion.php
	Created:		2011.02.21

	Modified By:	Wes Rockwood, Kenneth Williams, Team One
	Modified:		2011.03.14
	
	Commented By:	Christopher Huerta, Documentation Team
	Commented:	2011.03.09
-->
<!-- Begin php -->
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of file: /app/views/algorithm/view.ctp -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Insertion Sort</h2>
		<br />

		<!-- Begin Template Table -->		
				<table width="984px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<button id="s1" onclick="this.disabled=true; InitializeTimer(); StartTheTimer();">Demo</button>
								<button id="f1" onclick="Forward();">Forward</button>

								<button onClick="history.go(0); Res();">Reset</button>
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

<!-- Begin container -->
<div class="container"> 
 	
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<!-- Begin tab_container -->
	<div class="tab_container">

		<!-- Begin tab1 --> 
		<div id="tab1" class="tab_content"> 
<strong><div id="psuedoCode0">procedure insert(T[1..n])</div></strong>
<div id="psuedoCode1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for i &larr; 2 to n do</div>
<div id="psuedoCode2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x &larr; T[i]</div>
<div id="psuedoCode3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j &larr; i - 1</div>
<div id="psuedoCode4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while j > 0 and x < T[j] do</div>
<div id="psuedoCode5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[j+1] &larr; T[j]</div>
<div id="psuedoCode6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j &larr; j - 1</div>
<div id="psuedoCode7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T[j+1] &larr; x</div>

		</div>
		<!-- End tab1 -->
 
		<!-- Begin tab2 -->
		<div id="tab2" class="tab_content"> 
<strong><div id="cppLine1">void insertion_sort(int t[],int length)</div></strong>
<div id="cppLine2">{</div>
<div id="cppLine3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int x, j;</div>
<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i = 1; i < length; i++)</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = t[i];</div>
<div id="cppLine7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = i - 1;</div>
<div id="cppLine8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(j >= 0 && x < t[j])</div>
<div id="cppLine9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t[j+1] = t[j];</div>
<div id="cppLine11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j--;</div>
<div id="cppLine12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t[j+1] = x;</div>
<div id="cppLine14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine15">}</div>
		</div>
		<!-- End tab2 -->
	</div>
	<!-- End tab_container --> 
</div>
<!-- End container -->

						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" valign="top">
							<div id="workarea" class="workarea" style="position: relative;">
								<div id="box0" class="box">0</div>
								<div id="box1" class="box">1</div>

								<div id="box2" class="box">2</div>
								<div id="box3" class="box">3</div>
								<div id="box4" class="box">4</div>
								<div id="box5" class="box">5</div>
								<div id="box6" class="box">6</div>
								<div id="box7" class="box">7</div>

								<div id="box8" class="box">8</div>
								<div id="box9" class="box">9</div>
								
								<div style="float: left;" align="center" id="box11" class="plain-box-style"></div>
								
								<div id="box10" class="pivot">Compare</div> 
							</div>
						</td>
				<!-- End View -->
					</tr>

				
				<!-- Begin Settings 
					<tr height="20%" id="algo-table-bottom"></tr>
				 End Settings -->
				</table> 		  
				<!-- End Tamplate Table -->
		<br/> <br/>		
		</td>
	  </tr>
	</table>
<!-- End of file: /app/views/algorithm/view.ctp -->
		</td>
	  </tr>
	</table>
<!-- End php -->


 
