<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		merge.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.03.09
-->

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<h2>Merge Sort</h2>
		<br />

		<!-- Begin Template Table -->	
				<table width="984px" style="height:660px;" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							
							<div style="float: left;" align="left" id="control-button-box">
								<button id="start" onClick="StartAnimation()" disabled=true >Start</button>
								<button id="step" onClick="StepAnimation()" disabled=true >Step</button>
								<button id="stop" onClick="StopAnimation()" disabled=true >Stop</button>
								<button id="reset" onClick="ResetAnimation()" disabled=true >Reset</button>
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
							<!-- Merge Sort Algorithm -->										 

<div class="container"> 
  
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container"> 
		<div id="tab1" class="tab_content" style="font-size:small;">          <div id="psuedo">
                            	<div id="p0" class="psuedo"><b>procedure</b> mergesort(array T[1 .. n])<br /></div>
	                            <div id="p1" style="text-indent: 25pt;" class="psuedo">
                                    array U[1..&lfloor;n/2&rfloor;]&larr; array T[1..&lfloor;n/2&rfloor;]<br />
                                </div>
    	                        <div id="p2" style="text-indent: 25pt;" class="psuedo">
                                    array V[1..&lfloor;n/2&rfloor;]&larr; array T[1+&lfloor;n/2&rfloor;..n]<br />
                                </div>
        	                    <div id="p3" style="text-indent: 25pt;" class="psuedo">mergesort(array U)<br /></div>
            	                <div id="p4" style="text-indent: 25pt;" class="psuedo">mergesort(array V)<br /></div>
                	            <div id="p5" style="text-indent: 25pt;" class="psuedo">merge(U,V,T)</div>
                	            <br />
                    	        <div id="p6" class="psuedo"><b>procedure</b> merge(array U,V,T)</div>
                        	    <div id="p7" style="text-indent: 25pt;" class="psuedo">i, j &larr; 1</div>
                        	    <div id="p8" style="text-indent: 25pt;" class="psuedo">array U[ m+1 ], array V[ n+1 ] &larr; &infin;<br /></div>
                            	<div id="p9" style="text-indent: 25pt;" class="psuedo"><b>for</b> k &larr; 1 m <b>to</b> n <b>do</b><br /></div>
	                            <div id="p10" style="text-indent: 35pt;" class="psuedo"><b>if</b> U[ i ] < V[j]<br /></div>
    	                     	<div id="p11" style="text-indent: 45pt;" class="psuedo">
                                 <b>then</b> array T[ k ] &larr; U[ i ]; i &larr; i + 1  <br /></div>
    	                     	<div id="p12" style="text-indent: 45pt;" class="psuedo"><b>else</b> T[ k ] &larr; V[ j ]; j &larr; j + 1<br /></div>                                     	                     	
        	                </div>
		</div> 
		<div id="tab2" class="tab_content" style="font-size:small;">
<pre>
void mergesort(int *a, int left,int right)  
{  
   int pivot;  
   if(left<right)  
   {  
      pivot=(left+right)/2;  
      mergesort(a,left,pivot);  
      mergesort(a,pivot+1,right);  
      merge(a,left,pivot,right);  
   }  
}  

void merge(int *a,int left,int pivot,int right)  
{  
   int b[30],i,k,u,v,t;
   i=left;  
   u=left;  
   v=pivot+1;
   t=right;  
  
   while((u<=pivot)&&(v<=t))  
   {  
      if(a[u]<=a[v])  
      {  
         b[i]=a[u];  
         h++;  
      }  
      else  
      {  
         b[i]=a[v];  
         v++;  
      }  
      i++;  
   }  
   if(u>pivot)  
   {  
      for(k=v; k<=t; k++)  
      {  
         b[i]=a[k];  
         i++;  
      }  
   }  
   else  
   {  
      for(k=u; k<=pivot; k++)  
      {  
         b[i]=a[k];  
         i++;  
      }  
   }  
   for(k=left; k<=t; k++) a[k]=b[k];  
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
						    <div id="box0" class="boxStyle">
								    <h1 class="h1box">0</h1>
								</div>
								<div id="box1" class="boxStyle">
									<h1 class="h1box">8</h1>
								</div>
								<div id="box2" class="boxStyle">
									<h1 class="h1box">3</h1>
								</div>
								<div id="box3" class="boxStyle">
									<h1 class="h1box">4</h1>
								</div>
								<div id="box4" class="boxStyle">
									<h1 class="h1box">3</h1>
								</div>
								<div id="box5" class="boxStyle">
									<h1 class="h1box">5</h1>
								</div>		  
								<div id="box6" class="boxStyle">
									<h1 class="h1box">1</h1>
								</div>		  
								<div id="box7" class="boxStyle">
									<h1 class="h1box">2</h1>
							   </div>
								<div id="box8" class="boxStyle">
									<h1 class="h1box">0</h1>
								</div>		  
								<div id="box9" class="boxStyle">
									<h1 class="h1box">9</h1>
							   </div>								   
							</div>
						</td>
				<!-- End View -->
					</tr>
				
				
				<!-- Begin Settings 
					<tr height="20%" id="algo-table-bottom">
						<td colspan="6" align="center">
							
						</td>
					</tr>
				End Settings -->
				</table>		
		<!-- End Template Table -->
		<br/> <br/>
		
		</td>
	  </tr>
	</table>

<!-- End of php -->
		</td>
	  </tr>
	</table>


