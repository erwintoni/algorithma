<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		priorityq.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Nathaniel Parrish, Documentation Team
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
		<h2>Priority Queue</h2>		
		<br />

		<!-- Begin Template Table -->
				<table width="1050px" id="algo-table" border="2" cellpadding="5"> 
					<tr height="5%" class="algo-table-top"> 
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls"> 
							<div style="float: left;" align="left" id="control-button-box"> 
								<button id="s1"; onclick="this.disabled=true; InitializeTimer(); StartTheTimer()">Demo</button> 
								<button id="f1"; onclick="Push()">Push</button> 
								<button id="b1"; disabled=true onclick="Pop()">Pop</button> 
								<button onClick="window.location.reload(); Init()">Reset</button> 
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
						<td width="25%" valign="top" class="psuedocode" id="psuedocode">

<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container"> 
		<div id="tab1" class="tab_content" style="font-size:small;"> 
							<div id="psuedoCode1"><strong>procedure</strong> Push(value)</div>
							<div id="psuedoCode2">&nbsp&nbsp&nbsp&nbsp array[array_size + 1] <- value</div>
							<div id="nothighlight1">&nbsp&nbsp&nbsp&nbsp value_pos <- array_size + 1</div>
							<div id="psuedoCode3">&nbsp&nbsp&nbsp&nbsp for i <-array_size down to 0 do</div>
							<div id="psuedoCode4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp if array[value_pos] < array[i] then</div>
							<div id="nothighlight2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Swap(array[value_pos],array[i])</div>
							<div id="nothighlight3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp value_pos <- i</div>
							<div id="psuedoCode5"><strong>procedure</strong> Pop()</div>
							<div id="psuedoCode6">&nbsp&nbsp&nbsp&nbsp Pop last element off array of elements E</div>
		</div> 
 
		<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
//Items are placed into a vector which
//maintains the heap property
class Priority_queue {

typedef vector<T>::iterator iterator;

public:
   Priority_queue() : c() { }
   bool empty() { return c.empty(); }
   unsigned int size() { return c.size(); }
   void push(const T & x);
   void pop();
   T & top() { return c.front(); }
private:
   vector<T> c;
   void push_heap(iterator, iterator);
   void pop_heap(iterator, iterator);
   void adjust_heap(iterator, unsigned int, unsigned int);
};

void Priority_queue<T>::push(const T & x)
{
	c.push_back(x);
	push_heap(c.begin(), c.end());
}

void Priority_queue<T>::pop()
{
	pop_heap(c.begin(), c.end());
	c.pop_back();
}
</pre>
		</div> 
	</div> 
</div>
						</td> 
				<!-- End Psuedo --> 
 
				<!-- Begin View --> 
						<td colspan="5" valign="top"> 
							<div id="workarea" class="workarea"> 
								<div id="box0" class="box">1</div> 
								<div id="box1" class="box">2</div> 
								<div id="box2" class="box">3</div> 
								<div id="box3" class="box">4</div> 
								<div id="box4" class="box">5</div> 
								<div id="box5" class="box">6</div> 
								<div id="box6" class="box">7</div> 
								<div id="box7" class="box">8</div> 
								<div id="box8" class="box">9</div> 
								
								<div id="box10" class="plain-box-style"></div> 
								<div id="box11" class="plain-box-style"></div> 
								<div id="box12" class="plain-box-style"></div> 
								<div id="box13" class="plain-box-style"></div> 
								<div id="box14" class="plain-box-style"></div> 
								<div id="box15" class="plain-box-style"></div> 
								<div id="box16" class="plain-box-style"></div> 
								<div id="box17" class="plain-box-style"></div> 
								<div id="box18" class="plain-box-style"></div> 
								
								<div id="box20" class="white"></div> 
								<div id="box21" class="white"></div> 
								
								<div id="box30" class="plain-box-style"></div> 
								<div id="box31" class="plain-box-style"></div> 
								<div id="box32" class="plain-box-style"></div> 
								<div id="box33" class="plain-box-style"></div> 
								<div id="box34" class="plain-box-style"></div> 
								<div id="box35" class="plain-box-style"></div> 
								<div id="box36" class="plain-box-style"></div> 
								<div id="box37" class="plain-box-style"></div> 
								<div id="box38" class="plain-box-style"></div> 
								
								<div id="box40" class="plain-box-style"></div> 
								<div id="box41" class="plain-box-style"></div> 
								<div id="box42" class="plain-box-style"></div> 
								<div id="box43" class="plain-box-style"></div> 
								<div id="box44" class="plain-box-style"></div> 
								<div id="box45" class="plain-box-style"></div> 
								<div id="box46" class="plain-box-style"></div> 
								<div id="box47" class="plain-box-style"></div> 
								<div id="box48" class="plain-box-style"></div> 
							</div> 
						</td> 
				<!-- End View --> 
					</tr> 
				
				<!-- Begin Settings --> 
					<tr height="20%" id="algo-table-bottom"> 
						<td colspan="6" align="center"> 
							Number to push (1-9):
							<input type="text" size="3" maxlength="3" value="1" id="txt" onFocus="this.value='';" /> 
							<button id="f2" onclick="Push()">Push</button> 
						</td> 
					</tr> 
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



