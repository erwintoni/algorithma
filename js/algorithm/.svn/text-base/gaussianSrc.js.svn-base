/*
	Name:		Kenneth Williams, Team One
	Project:		{AlgorithmA}; 2011
	File:		gaussianSrc.js
	Created:		20XX.XX.XX

	Modified By:	Kenneth Williams, Team One
	Modified:		2011.03.21
	
	Commented By:	Juan Vidart, Documentation Team
	Commented:	2011.03.16
*/
// Global variables required by pbMan and jsAnim to run the animations
var manager = new jsAnimManager();
var playback = new pbManager();

// Global variables list of global variables used in running the
// algorithm/animation
//the moves array is the array the naMoves are stored
var naMoves = new Array;
var nCounter = 0;
naMoves.push('pseudoCode0');

// Global variables for the timer
var nSecs;
var bTimerId = null;
var bTimerRunning = false;
var nDelay = 1000;

var Matrix;
var LowerTriangle;
var State = 0;
var Columns = 4;
var Rows = 4;

function Save(e1, e2)
{
  var naTemp = new Array;
  naTemp[0] = e1;
  naTemp[1] = e2;
  naMoves.push(naTemp);
}

function Res()
{
  document.getElementById("s1").disabled = false;
  document.getElementById("f1").disabled = false;
}

function Highlight(e1, e2)
{
  if (typeof(e1) == 'string' && e1.indexOf('pseudoCode') != -1)
  {
    var anim = manager.createAnimObject(e1);
    anim.add({ property: Prop.backgroundColor, to: new Col(255, 255, 0), duration: 0 });
    return;
  }
  for (var j = 0; j <= Columns; ++j)
  {
    document.getElementById('R' + e1 + 'C' + j).className = 'destination';
    if (e2)
    {
      document.getElementById('R' + e2 + 'C' + j).className = 'source';
    }
  }
}

function UndoHighlights()
{
  for (i = 0; i <= 16; ++i)
  {
    var sVariable = 'pseudoCode' + i;
    var anim = manager.createAnimObject(sVariable);
    anim.add({ property: Prop.backgroundColor, to: new Col(255, 255, 255), duration: 0 });
  }
  for (var i = 0; i < Rows; ++i)
  {
    for (var j = 0; j <= Columns; ++j)
    {
      document.getElementById('R' + i + 'C' + j).className = 'element';
    }
  }
}

function Forward()
{
  document.getElementById("s1").disabled = true;
  UndoHighlights();
  if (nCounter >= naMoves.length)
  {
    // Why doesn't this work?
    StopTheClock();
    return;
  }

  var naTemp = naMoves[nCounter++];
  if (naTemp[0] != undefined && naTemp[0].constructor.toString().indexOf("Array") != -1)
  {
    UpdateMatrix(naTemp.slice());
  }
  else if (naTemp.length == 2)
  {
    Highlight(naTemp[0], naTemp[1]);
  }
  else
  {
    Highlight(naTemp);
  }
}

function Forward2()
{
  document.getElementById("f1").disabled = true;
  document.getElementById("s1").disabled = true;
  UndoHighlights();
  if (nCounter >= naMoves.length)
  {
    // Why doesn't this work?
    StopTheClock();
    return;
  }

  var naTemp = naMoves[nCounter++];
  if (naTemp[0] != undefined && naTemp[0].constructor.toString().indexOf("Array") != -1)
  {
    UpdateMatrix(naTemp.slice());
  }
  else if (naTemp.length == 2)
  {
    Highlight(naTemp[0], naTemp[1]);
  }
  else
  {
    Highlight(naTemp);
  }
}

function InitializeTimer()
{
    nSecs = 1;
    StopTheClock();
    StartTheTimer();
}

function StopTheClock()
{
  if (bTimerRunning)
  {
    clearTimeout(bTimerId);
  }
  bTimerRunning = false;
}

function StartTheTimer()
{
  if (nSecs == 0)
  {
    StopTheClock();
    Forward2();
    InitializeTimer();
  }
  else
  {
    self.status = nSecs--;
    bTimerRunning = true;
    bTimerId = self.setTimeout('StartTheTimer()', nDelay);
  }
}

function Initialize()
{
  GenerateMatrix();
  GenerateRandomValues();
  BuildMatrixArray();
  BuildLowerTriangleArray();

  var rowEchelon = GaussianElimination();
  document.getElementById("concept").onmouseover = function()
  {
    Tip("Gaussian Elimination is an algorithm for solving systems of linear equations, finding the rank of a matrix and calculating the inverse of an invertible square matrix. Elementary row operations are used to reduce a matrix to row-echelon form if two conditions hold; All non-zero rows, rows with at least one non-zero element, are above any rows of all zeros, and the leading coefficient, the first non-zero number from the left, of a non-zero row is always to the right of the leading coefficient of the row above it.", WIDTH, 500, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt', FONTCOLOR, '#000000', PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800, CENTERMOUSE, true, OFFSETX, 0, BGCOLOR, '#FFFFCC');
  }
  document.getElementById("howto").onmouseover = function()
  {
    Tip( '<strong>Demo</strong> - Starts the Gaussian Elimination animation.<br /><br /><strong>Forward</strong> - Allows the user to step through the sort one step at a time. Walkthrough is enabled when this button is pressed.<br /><br /><strong>Reset</strong> - Resets the Gaussian Elimination animation to the beginning.' ,WIDTH, 400, FONTFACE, 'Verdana, sans-serif', FONTSIZE, '12pt',FONTCOLOR, '#000000',PADDING, 8, SHADOW, true, SHADOWCOLOR, '#CCCCCC', FADEIN, 400, FADEOUT, 800,CENTERMOUSE, true, OFFSETX, 0 ,BGCOLOR, '#CEFFFF');
  }
}

function GaussianElimination()
{
  var row, col;
  var elem = LowerTriangle[State];
  naMoves.push('pseudoCode1');
  var lTriangle = Rows * (Rows + 1) / 2;
  naMoves.push('pseudoCode2');
  if (elem)
  {
    row = elem.charAt(1);
    col = elem.charAt(3);
  }

  naMoves.push('pseudoCode3');
  // After zeroizing the lower triangle of the matrix, normalize the diagonal
  if (State >= lTriangle)
  {
    naMoves.push('pseudoCode4');
    row = State - lTriangle;
    naMoves.push('pseudoCode5');
    if (row >= Rows)
    {
      naMoves.push('pseudoCode6');
      //alert("Done!");
      return;
    }
    naMoves.push('pseudoCode7');
    Normalize(row);
    naMoves.push('pseudoCode8');
  }

  // Check if diagonal contains any zeros
  else if (row == col)
  {
    naMoves.push('pseudoCode9');
    naMoves.push(row);
    if (GetElement(row, col) == 0.0)
    {
      naMoves.push('pseudoCode10');
      Swap(row);
    }
    naMoves.push('pseudoCode11');
    if (GetElement(row, col) == 0.0)
    {
      naMoves.push('pseudoCode12');
      alert("Singular!");
      return;
    }
    naMoves.push('pseudoCode13');
  }

  // Zeroize lower triangle of the matrix
  else
  {
    naMoves.push('pseudoCode14');
    RowAddition(row, col);
  }

  naMoves.push('pseudoCode15');
  ++State;
  naMoves.push('pseudoCode16');
  GaussianElimination();
}

// -----------------------------------------------------------------------------
//                         Elementary Row Operations
// -----------------------------------------------------------------------------

function Normalize(i)
{
  naMoves.push(i);
  if (Math.abs(GetElement(i, i)) > 1)
  {
    var m = 1 / GetElement(i, i);
    for (var j = i; j <= Columns; ++j)
    {
      SetElement(i, j, m * GetElement(i, j));
    }
    naMoves.push(CreateMatrixArrayBuffer());
  }
}

function RowAddition(j, i)
{
  var m = GetElement(j, i) / GetElement(i, i);
  Save(j, i);
  for (var k = Columns; k >= i; --k)
  {
    var t = GetElement(j, k) - m * GetElement(i, k);
    SetElement(j, k, t);
  }
  naMoves.push(CreateMatrixArrayBuffer());
}

function Swap(i)
{
  var elem = 0;
  for (var j = i; j < Rows; ++j)
  {
    if (Math.abs(GetElement(j, i)) > 0)
    {
	  elem = j;
      break;
    }
  }
  if (elem > 0)
  {
    Save(i, elem);
    for (var k = 0; k <= Columns; ++k)
    {
      var s = GetElement(elem, k);
      var t = GetElement(i, k);
      SetElement(i, k, s);
      SetElement(elem, k, t);
    }
    naMoves.push(CreateMatrixArrayBuffer());
  }
}

// -----------------------------------------------------------------------------
//                           Matrix Array Functions
// -----------------------------------------------------------------------------

function GetElement(row, col)
{
  return Matrix[row][col];
}

function SetElement(row, col, value)
{
  if (Math.abs(value) < 0.0000000001)
  {
      value = 0.0;
  }
  Matrix[row][col] = value;
}

function CreateMatrixArrayBuffer()
{
  var mx = new Array(Rows);
  for (var i = 0; i < Rows; ++i)
  {
    mx[i] = new Array(Columns + 1);
    for (var j = 0; j <= Columns; ++j)
    {
      mx[i][j] = Matrix[i][j];
    }
  }
  return mx;
}

function BuildLowerTriangleArray()
{
  LowerTriangle = new Array();
  for (var i = 0, e = 0; i < Columns; ++i)
  {
    for (var j = i; j < Rows; ++j)
    {
      LowerTriangle[e++] = 'R' + j + 'C' + i;
    }
  }
}

function BuildMatrixArray()
{
  Matrix = new Array(Rows);
  for (var i = 0; i < Rows; ++i)
  {
    Matrix[i] = new Array(Columns + 1);
    for (var j = 0; j <= Columns; ++j)
    {
      SetElement(i, j, document.getElementById('R' + i + 'C' + j).value);
    }
  }
}

// -----------------------------------------------------------------------------
//                             Matrix Table Functions
// -----------------------------------------------------------------------------

function UpdateMatrix(mx)
{
  for (var i = 0; i < Rows; ++i)
  {
    for (var j = 0; j <= Columns; ++j)
    {
      var oInput = document.getElementById('R' + i + 'C' + j);

      // TODO: Add ToFrac function
      oInput.value = Math.round(1000 * mx[i][j]) / 1000;
    }
  }
}

function GenerateRandomValues()
{
  for (var i = 0; i < Rows; ++i)
  {
    for (var j = 0; j <= Columns; ++j)
    {
      var oInput = document.getElementById('R' + i + 'C' + j);
      oInput.value = Math.floor(Math.random() * 51 - 25);
    }
  }
}

function GenerateMatrix()
{
  var oTbl = document.createElement('table');
  oTbl.id = 'matrix';
  for (var i = 0; i < Rows; ++i)
  {
    var oTR = oTbl.insertRow(i);
    if (i == Rows - 1)
    {
      oTR.className = 'last-row';
    }
    for (var j = 0; j <= Columns; ++j)
    {
      var oInput = document.createElement('input');
      var oTD = oTR.insertCell(j);
      oInput.className = 'element';
      oInput.id = 'R' + i + 'C' + j;
      oInput.type = 'text';
      oInput.value = 0;
      if (j == Columns)
      {
        oTD.className = 'last-col';
      }
      oTD.appendChild(oInput);
    }
  }
  document.getElementById('workarea').appendChild(oTbl);
}
