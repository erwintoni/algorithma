/*
	Name:		Student Name
	Project:		{AlgorithmA}; 2011
	File:		pseudoTojs.js
	Created:		20XX.XX.XX

	Modified By:	Student Name
	Modified:		20XX.XX.XX
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.16
*/

function pseudoToJs(input)
{
	var output = input;
	output = output + "\nnbsp\nnbsp\nnbsp\nnbsp\nnbsp\nnbsp";
	var vartxt = getVars(output);
	//Do the replacements that can be done globally
	output = output.replace(/:=/gi, "="); 

	output = p2jaddAnimHL(output);

	//Do the replacements that should be done line by line
	var splitbyline = output.split("\n"); //split the code into individual lines
	var funcN = output.split("\n");
	var totallines = splitbyline.length; //get number of lines of code
	var wscnt = 0;
	for ( var i=0; i<totallines; i++ ) //process psuedo-code line at a time
	{
		funcN[i] = getFuncName(funcN[i]);
		splitbyline[i] = procToFunction(splitbyline[i], vartxt); // changes Procedure to Function and adds {
		splitbyline[i] = convertForLoops(splitbyline[i]); // of the type "for i := 2 to n do"
		splitbyline[i] = convertWhileLoops(splitbyline[i]); // of the type "while j < 0 and x < T[j] do"
		splitbyline[i] = convertIfStatements(splitbyline[i]); // of the type "if T[[j] < minx then"
		splitbyline[i] = convertElseStatements(splitbyline[i]); // of the type "else"
		splitbyline[i] = addSemiColon(splitbyline[i]); // adds semi-colons to lines that need them.
	}
	var output = splitbyline.join("\n"); //rejoin all the individual lines


	output = closeParenthesis(output);
	output = output.replace("var nbsp;", ""); 
	output = output.replace(/nbsp/gi, " ");
	return output;
}
function getVars(str)
{
	var varnames = new Array();
	var tmpstr = str.replace(/:=/gi, " "); 
	tmpstr = tmpstr.replace("   ", " "); 
	tmpstr = tmpstr.replace("nbsp", " "); 
	tmpstr = tmpstr.replace("\n", " "); 
	tmpstr = tmpstr.replace(/\s+/g," "); 
	tmpstr = tmpstr.replace(/for/gi," "); 
	tmpstr = tmpstr.replace(/downto/gi," "); 
	tmpstr = tmpstr.replace(/do/gi," "); 
	tmpstr = tmpstr.replace(/to/gi," "); 
	tmpstr = tmpstr.replace(/if/gi," "); 
	tmpstr = tmpstr.replace(/then/gi," "); 
	tmpstr = tmpstr.replace(/else/gi," "); 
	tmpstr = tmpstr.replace(/var/gi," "); 
	tmpstr = tmpstr.replace(/and/gi," "); 
	tmpstr = tmpstr.replace(/while/gi," "); 
	tmpstr = tmpstr.replace(/procedure/gi," "); 

	varnames = tmpstr.split(" ");
	for(var i = 0; i < varnames.length; i++)
	{
		if (/\W/.test(varnames[i])) 
		{
			//non alpha-numeric characters
			varnames[i] = "";
		}
		if (/^\d+$/.test(varnames[i])) //if only number
		{
			varnames[i] = "";
		}
		if (varnames[i] == 'n') 
		{
			//if for loop exists over an array, removes extra n variable
			varnames[i] = "";
		}
	}
	
	tmpstr = varnames.join(" ");	
	tmpstr = tmpstr.replace(/\s+/g," "); 
	varnames = killDupes(tmpstr.split(" "));
	var vartxt = "";
	for(var i = 0; i < varnames.length; i++)
	{
		if (varnames[i] != '')
		{
			vartxt = vartxt + "\n   var "+varnames[i]+";";
		}
	}
	return vartxt;
}
function getCurlyOnlyLines(str) 
{
	var tmpstr = str.split('\n');
	var curlyIndex = -1;
	var wordIndex = -1;
	var linesWithCurlys = new Array();
	for (var i = 0; i < tmpstr.length; i++)
	{
		linesWithCurlys[i] = 0;
		curlyIndex = tmpstr[i].indexOf('{');
		wordIndex = tmpstr[i].indexOf(/\S/);
		if (curlyIndex != -1)
		{
			if (curlyIndex != -1)
			{
				linesWithCurlys[i] = i;
			}
		}
	}
	return linesWithCurlys;
}
function p2jaddAnimHL(str)
{
	var curlyLines = getCurlyOnlyLines(str);
	var splitByLine = str.split('\n');
	var length = splitByLine.length + 1;
	for (var i = 0; i < splitByLine.length; i++)
	{
		if (curlyLines[i] != 0 && splitByLine[i].length > 0)
		{
			splitByLine[i] = '';
			splitByLine[i-1] = splitByLine[i-1] + ' {';
		}
	}
	var subs = 0;
	for (var i = 0; i < splitByLine.length; i++)
	{
		if (splitByLine[i]=="")
		{
			splitByLine[i] = '';
			subs--;
		}
		else if(splitByLine[i].indexOf("nbsp")==-1)
		{
			subs = 0;
			var linenum = i + subs;
			if(linenum != 0)
			{
				var checkcur = splitByLine[i].replace(/^\s+|\s+$/g,"");
				if(checkcur == '}' && i + 1 != splitByLine.length)
					splitByLine[i] = splitByLine[i] + '\n\thighlightadd(\"' + linenum + '\"\);';
				else
					splitByLine[i] = '\thighlightadd(\"' + linenum + '\"\);\n' + splitByLine[i];
			}

				
		}
	}
	
	var newarry = new Array();
	for (var i = 0; i < splitByLine.length; i++)
	{
		if (splitByLine[i]!="")
			newarry.push(splitByLine[i]);
	}
	
	var returnStr = newarry.join('\n');
	return returnStr;
}

function addSemiColon(str)
{
	var keywords = /for|while|if|else|function/;
	var chars = /;|{|}/;

	indx1 = str.search(keywords);
	if (indx1 == -1)
	{
		indx2 = str.search(chars);
		if (indx2 == -1)
		{
			if (str.length > 0) 
			{
				//ensure it's not just whitespace
				if(str.replace(/^\s+|\s+$/g,"").length>0)
				{
					if(str.indexOf("nbsp")==-1)
					{
						str = str + ';';
					}
				}
			}
		}
	}
	return str;
}
function procToFunction(str, vartxt)
{
	var appendtxt = "";
	var beginIndex = str.indexOf('procedure'); 
	if (beginIndex != -1) //found 'procedure'
	{
		str = str.replace(/procedure/gi, "function"); //replace keyword procedure with function

		var params = str.substring(str.indexOf('(')); // get params from declaration
		params = params.replace(/\(|\)/g, ''); // trim parenthesis around params

		var commaIndex = params.indexOf(','); // check for multiple params
		if (commaIndex != -1) // found multiple params
		{ // split params apart to use in array loop below
			var i = 0;
			var data = params.split(',');
			for (i = 0; i < data.length; i++)
			{
				data[i] = data[i].replace(/^\s+|\s+$/, ''); // trim whitespace at beginning of name
			}
			for (var j = 0; j < data.length; j++)
			{// loop for multiple arrays
				arrayIndex = data[j].search('[1..n]');
				if (arrayIndex != -1)
				{
					data[j] = data[j].substring(0, arrayIndex-1); // peel off everything but arrayname 
					appendtxt = appendtxt +  "\n\tvar n = " + data[j] + ".length;";
				}// need to change variable name 'n' for multiple arrays
			}

		}
		else
		{ // single array being passed
			var arrayIndex = -1;
			arrayIndex = params.indexOf('[1..n]');
			if (arrayIndex != -1)
			{
				params = params.substring(0, arrayIndex);
				appendtxt = appendtxt +  "\n\tvar n = " + params + ".length;";
			}
		}

		str = str.replace(/\[1..n\]/g, '');
		str = str + '\n{' + appendtxt + vartxt;
	}
	
	return str;
}
function getFuncName(str)
{
	var triggers = /procedure |function /;
	var beginIndex = str.search(triggers);
	if (beginIndex != -1)
	{
		var tmpstr = str.replace(triggers, '');
		tmpstr = tmpstr.substring(0, tmpstr.indexOf('('));
		str = tmpstr + '(naUnsorted)';
		runThis = str;
	}
	return str;
}
function closeParenthesis(str)
{
	var white = new Array();
	var closepstack = new Array();

	var splitbyline = str.split("\n"); //split the code into individual lines
	var totallines=splitbyline.length; //get number of lines of code

	for ( var i=0; i<totallines; i++ ) //process one line at a time
	{
		//fully populate whitespace array
		if (splitbyline[i].match(/highlight/)) //don't mess with highlight lines
		{
			white[i] = -1;
		}
		else
		{
			white[i] = getWhiteSpaceCount(splitbyline[i]);
		}
	}

	var prewhite = 1;
	for ( var i=1; i<totallines; i++ ) //process one line at a time
	{
		if (splitbyline[i].match(/highlight/)) 
		{
			//don't mess with highlight lines
			if(i > 2)
				prewhite = 2;
		}
		else
		{
			//look for open parenthesis
			beginIndex = splitbyline[i].indexOf('{'); 
			if (beginIndex != -1)
			{
				//open parenthesis found!
				closepstack.push(white[i]); //pushes whitespace amount for line onto stack to close later
			}
			var done = -1;
			var preline = splitbyline[i];
			var curlys = "";
			//alert("i="+i+" prevhite="+prewhite+" white[i]="+white[i]+" white[i-prewhite]="+white[i-prewhite]);
			if(white[i-prewhite]>white[i] || (white[i]==0 && i != 1)) //we decreased whitespace, moved up a level (or maintained but aren't on line 1)
			{
				while(done == -1) //for curly stacking
				{
					if (white[i] <= closepstack[closepstack.length-1]) //if needs level that needs close is current level or above, close it.
					{
						curlys = curlys + numToWhitespace(closepstack[closepstack.length-1])+"}\n";
						closepstack.pop(); //remove top element of stack
					}
					else
					{
						done=1;
					}
				}
				splitbyline[i] = curlys + preline;
			}
			prewhite = 1;
		}
		
	}
	var endstr = splitbyline.join("\n"); //rejoin all the individual lines
	return endstr;
}
function numToWhitespace(num)
{
	var output = '';
	for(var i =0; i < num; i++)
	{
		output = output + ' ';
	}
	return output;
}
function getWhiteSpaceCount(str)
{
	//returns amount of whitespace at beginning of string
	var wscnt = 0;
	var strlength = str.length;
	for(var j = 0; j < strlength; j++)
	{
		if(str.charAt(j)==" " || str.charAt(j)=="	")
		{
			//probably need to set specific white-space character used somewhere in the future, whether it's 3 spaces or tab
			wscnt++;
		}
		else
		{
			break;
		}
	}
	return wscnt;
}
function convertIfStatements(str)
{
	var results = str;
	var data = '';
	var beginIndex = -1;
	var endIndex = -1;
	str = str.replace(" = ", "=="); 

	//if T[j] < minx then
	beginIndex = str.indexOf('if '); 
	if (beginIndex != -1)
	{
		//if statement exists. Record tabs
		var tabs = str.substring(0,beginIndex);
		endIndex = str.lastIndexOf('then');
		if (endIndex != -1) 
		{
			data = str.substring(beginIndex+3, endIndex-1); //data = "i = 2 to n", +4/-1 is for letters in 'for' and spaces
			data = data.replace("and", "&&"); 
			data = data.replace("or", "||"); 
			var results = tabs+"if ("+data+")\n"+tabs+"{";
		}
	}

	return results;	
}
function convertElseStatements(str) {
	var results = str;
	var beginIndex = -1;
	var endIndex = -1;

	beginIndex = str.indexOf('else ');
	if (beginIndex != -1) 
	{ // else statement exists
		var tabs = str.substring(0, beginIndex);
		endIndex = str.lastIndexOf('do');
		if (endIndex != -1) 
		{
			var results = tabs + "else " + "\n" + tabs + "{";
		}
	}
	return results;
}
function convertWhileLoops(str)
{
	var results = str;
	var data = '';
	var beginIndex = -1;
	var endIndex = -1;
	str = str.replace(" = ", "=="); 

	//while j < 0 and x < T[j] do
	beginIndex = str.indexOf('while '); 
	if (beginIndex != -1)
	{
		//for loop exists. Record tabs
		var tabs = str.substring(0,beginIndex);
		endIndex = str.lastIndexOf('do');
		if (endIndex != -1) 
		{
			data = str.substring(beginIndex+6, endIndex-1); //data = "i = 2 to n", +4/-1 is for letters in 'for' and spaces
			data = data.replace("and", "&&"); 
			data = data.replace("or", "||"); 
			var results = tabs+"while ("+data+")\n"+tabs+"{";
		}
	}

	return results;	
}

function convertForLoops(str)
{ // needs to be refactored and cleaned up
	var results = str;
	var data = '';
	var beginIndex = -1;
	var endIndex = -1;

	beginIndex = str.indexOf('for '); 
	if (beginIndex != -1)
	{
		//for loop exists. Record tabs
		var tabs = str.substring(0,beginIndex);
		endIndex = str.lastIndexOf('do');
		if (endIndex != -1) 
		{
			data = str.substring(beginIndex+4, endIndex-1); //data = "i = 2 to n", +4/-1 is for letters in 'for' and spaces
			var pieces = new Array(); 
			var upordown = 0;
			if (data.indexOf(" downto ") != -1)
			{
				pieces = data.split(" downto ");	
				upordown = 1;
			}
			else 
			{
				pieces = data.split(" to ");
			}
			var pre = pieces[0];
			var flagvar = pieces[1].replace(/^\s+|\s+$/g,""); //get flag variable name and trim whitespace
			var prepieces = pre.split("=");
			var varname = prepieces[0].replace(/^\s+|\s+$/g,""); //get variable name and trim whitespace

			pre = "var " + pre;
			var mid = '';
			var end = '';
			if (upordown == 1)
			{ // we have a decrementing loop
				mid = varname + " >= " + flagvar;
				end = varname + "--";
			}
			else
			{
				mid = varname + " <= " + flagvar;
				end = varname + "++";
			}
			var results = tabs+"for ("+pre+"; "+mid+"; "+end+")\n"+tabs+"{";
		}
	}

	return results;	
}

function killDupes(a) {
 temp = new Array();
 for(i=0;i<a.length;i++){
  if(!contains(temp, a[i])){
   temp.length+=1;
   temp[temp.length-1]=a[i];
  }
 }
 return temp;
}
 
//Will check for the Uniqueness
function contains(a, e) {
 for(j=0;j<a.length;j++)if(a[j]==e)return true;
 return false;
}
