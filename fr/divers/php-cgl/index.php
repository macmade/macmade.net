<?php
	
	// Path to the directory
	require_once(substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($_SERVER['PHP_SELF'])) . '/init.php');
	
	// Start page
	$PAGE->start();
?>
							<h1>Règles de codage PHP</h1>
							<h2>Table des matières</h2>
							<ol>
								<li>
									<a href="#cgl-" title="">Introduction</a>
									<ol>
										<li>
											<a href="#cgl-" title="">Contenu</a>
										</li>
										<li>
											<a href="#cgl-" title="">But</a>
										</li>
									</ol>
								</li>
								<li>
									<a href="#cgl-" title="">Formattage d'un fichier PHP</a>
									<ol>
										<li>
											<a href="#cgl-" title="">Général</a>
										</li>
										<li>
											<a href="#cgl-" title="">Indentation</a>
										</li>
										<li>
											<a href="#cgl-" title="">Longueur maximum d'une ligne</a>
										</li>
										<li>
											<a href="#cgl-" title="">Fin de ligne</a>
										</li>
									</ol>
								</li>
								<li>
									<a href="#cgl-" title="">Conventions de nommage</a>
									<ol>
										<li>
											<a href="#cgl-" title="">Classes</a>
										</li>
										<li>
											<a href="#cgl-" title="">Interfaces</a>
										</li>
										<li>
											<a href="#cgl-" title="">Fichiers</a>
										</li>
										<li>
											<a href="#cgl-" title="">Fonctions et méthodes</a>
										</li>
										<li>
											<a href="#cgl-" title="">Variables</a>
										</li>
										<li>
											<a href="#cgl-" title="">Constantes</a>
										</li>
									</ol>
								</li>
								<li>
									<a href="#cgl-" title="">Conventions de codage</a>
									<ol>
										<li>
											<a href="#cgl-" title="">PHP Code Demarcation</a>
										</li>
										<li>
											<a href="#cgl-" title="">Chaînes</a>
										</li>
										<li>
											<a href="#cgl-" title="">Tableaux</a>
										</li>
										<li>
											<a href="#cgl-" title="">Classes</a>
										</li>
										<li>
											<a href="#cgl-" title="">Fonctions et méthodes</a>
										</li>
										<li>
											<a href="#cgl-" title="">Instructions de contrôle</a>
										</li>
										<li>
											<a href="#cgl-" title="">Documentation du code</a>
										</li>
									</ol>
								</li>
							</ol>
							<h2>Overview</h2>
							<h3 class="border-red">Scope</h3>
							<div>
								This document provides the guidelines and resources for developers and teams developing or developing on the Zend Framework. The subjects covered are:
							</div>
							<ul>
								<li>
									PHP File Formatting
								</li>
								<li>
									Naming Conventions
								</li>
								<li>
									Coding Style
								</li>
								<li>
									Inline Documentation
								</li>
							</ul>
							<h3 class="border-red">Goal</h3>
							<div>
								Good coding standards are important in any development project, but particularly when multiple developers are working on the same project. Having coding standards helps ensure that the code is of high quality, has fewer bugs, and is easily maintained.
							</div>
							<h2>PHP File Formatting</h2>
							<h3 class="border-red">General</h3>
							<div>
								For files that contain only PHP code, the closing tag ("?&gt;") is never permitted. It is not required by PHP. Not including it prevents trailing whitespace from being accidentally injected into the output.
							</div>
							<div>
								<span class="italic">IMPORTANT:</span> Inclusion of arbitrary binary data as permitted by __HALT_COMPILER() is prohibited from any Zend framework PHP file or files derived from them. Use of this feature is only permitted for special installation scripts.
							</div>
							<h3 class="border-red">Indentation</h3>
							<div>
								Use an indent of 4 spaces, with no tabs.
							</div>
							<h3 class="border-red">Maximum Line Length</h3>
							<div>
								The target line length is 80 characters, i.e. developers should aim keep code as close to the 80-column boundary as is practical. However, longer lines are acceptable. The maximum length of any line of PHP code is 120 characters.
							</div>
							<h3 class="border-red">Line Termination</h3>
							<div>
								Line termination is the standard way for Unix text files. Lines must end only with a linefeed (LF).<br />
								Linefeeds are represented as ordinal 10, or hexadecimal 0x0A.
							</div>
							<div>
								Do not use carriage returns (CR) like Macintosh computers (0x0D).
							</div>
							<div>
								Do not use the carriage return/linefeed combination (CRLF) as Windows computers (0x0D, 0x0A).
							</div>
							<h2>Naming Conventions</h2>
							<h3 class="border-red">Classes</h3>
							<div>
								The Zend Framework employs a class naming convention whereby the names of the classes directly
								map to the directories in which they are stored. The root level directory of the Zend Framework is the
								"Zend/" directory, under which all classes are stored hierarchially.
							</div>
							<div>
								Class names may only contain alphanumeric characters. Numbers are permitted in class names but
								are discouraged. Underscores are only permitted in place of the path separator -- the filename
								"Zend/Db/Table.php" must map to the class name "Zend_Db_Table".
							</div>
							<div>
								If a class name is comprised of more than one word, the first letter of each new word must be
								capitalized. Successive capitalized letters are not allowed, e.g. a class "Zend_PDF" is not allowed while
								"Zend_Pdf" is acceptable.
							</div>
							<div>
								Zend Framework classes that are authored by Zend or one of the participating partner companies
								and distributed with the Framework must always start with "Zend_" and must be stored under the
								"Zend/" directory hierarchy accordingly.
							</div>
							<div>
								These are examples of acceptable names for classes:
							</div>
							<div class="code">
Zend_Db
Zend_View
Zend_View_Helper
							</div>
							<div>
								<span class="italic">IMPORTANT:</span> Code that operates with the framework but is not part of the framework, e.g. code written by a framework end-user and not Zend or one of the framework's partner companies, must never start with "Zend_".
							</div>
							<h3 class="border-red">Interfaces</h3>
							<div>
								Interface classes must follow the same conventions as other classes (see above), however must end with the word "Interface", such as in these examples:
							</div>
							<div class="code">
Zend_Log_Adapter_Interface
Zend_Controller_Dispatcher_Interface
							</div>
							<h3 class="border-red">Filenames</h3>
							<div>
								For all other files, only alphanumeric characters, underscores, and the dash character ("-") are permitted. Spaces and are prohibited.
							</div>
							<div>
								Any file that contains any PHP code must end with the extension ".php". These examples show the acceptable filenames for containing the class names from the examples in the section above:
							</div>
							<div class="code">
Zend/Db.php
Zend/Controller/Front.php
Zend/View/Helper/FormRadio.php
							</div>
							<div>
								File names must follow the mapping to class names described above.
							</div>
							<h3 class="border-red">Functions and Methods</h3>
							<div>
								Function names may only contain alphanumeric characters. Underscores are not permitted.
							</div>
							<div>
								Numbers are permitted in function names but are discouraged.
							</div>
							<div>
								Function names must always start with a lowercase letter. When a function name consists of more than one word, the first letter of each new word must be capitalized. This is commonly called the "studlyCaps" or "camelCaps" method.
							</div>
							<div>
								Verbosity is encouraged. Function names should be as verbose as is practical to enhance the understandability of code.
							</div>
							<div>
								These are examples of acceptable names for functions:
							</div>
							<div class="code">
filterInput()
getElementById()
widgetFactory()
							</div>
							<div>
								For object-oriented programming, accessors for objects should always be prefixed with either "get" or "set". When using design patterns, such as the singleton or factory patterns, the name of the method should contain the pattern name where practical to make the pattern more readily recognizable.
							</div>
							<div>
								Functions in the global scope ("floating functions") are permitted but discouraged. It is recommended that these functions should be wrapped in a static class.
							</div>
							<h3 class="border-red">Variables</h3>
							<div>
								Variable names may only contain alphanumeric characters. Underscores are not permitted. Numbers are permitted in variable names but are discouraged.
							</div>
							<div>
								For class member variables that are declared with the "private" or "protected" construct, the first character of the variable name must be a single underscore. This is the only acceptable usage of an underscore in a function name. Member variables declared "public" may never start with an underscore.
							</div>
							<div>
								Like function names (see section 3.3, above) variable names must always start with a lowercase letter and follow the "camelCaps" capitalization convention.
							</div>
							<div>
								Verbosity is encouraged. Variables should always be as verbose as practical. Terse variable names such as "$i" and "$n" are discouraged for anything other than the smallest loop contexts. If a loop contains more than 20 lines of code, the variables for the indices need to have more descriptive names.
							</div>
							<h3 class="border-red">Constants</h3>
							<div>
								Constants may contain both alphanumeric characters and the underscore. Numbers are permitted in constant names.
							</div>
							<div>
								Constants must always have all letters capitalized.
							</div>
							<div>
								To enhance readablity, words in constant names must be separated by underscore characters. For example, EMBED_SUPPRESS_EMBED_EXCEPTION is permitted but EMBED_SUPPRESSEMBEDEXCEPTION is not.
							</div>
							<div>
								Constants must be defined as class members by using the "const" construct. Defining constants in the global scope with "define" is permitted but discouraged.
							</div>
							<h2>Coding Style</h2>
							<h3 class="border-red">PHP Code Demarcation</h3>
							<div>
								PHP code must always be delimited by the full-form, standard PHP tags:
							</div>
							<div class="code">
&lt;?php
?&gt;
							</div>
							<div>
								Short tags are never allowed. For files containing only PHP code, the closing tag must always be omitted (See Section A.2.1, “General”).
							</div>
							<h3 class="border-red">Strings</h3>
							<h4>String Literals</h4>
							<div>
								When a string is literal (contains no variable substitutions), the apostrophe or "single quote" must always used to demarcate the string:
							</div>
							<div class="code">
$a = 'Example String';
							</div>
							<h4>String Literals Containing Apostrophes</h4>
							<div>
								When a literal string itself contains apostrophes, it is permitted to demarcate the string with quotation marks or "double quotes". This is especially encouraged for SQL statements:
							</div>
							<div class="code">
$sql = "SELECT `id`, `name` from `people` WHERE `name`='Fred'";
							</div>
							<div>
								The above syntax is preferred over escaping apostrophes.
							</div>
							<h4>Variable Substitution</h4>
							<div>
								Variable substitution is permitted using either of these two forms:
							</div>
							<div class="code">
$greeting = "Hello $name, welcome back!";
$greeting = "Hello {$name}, welcome back!";
							</div>
							<div>
								For consistency, this form is not permitted:
							</div>
							<div class="code">
$greeting = "Hello ${name}, welcome back!";
							</div>
							<h4>String Concatenation</h4>
							<div>
								Strings may be concatenated using the "." operator. A space must always be added before and after the "." operator to improve readability:
							</div>
							<div class="code">
$company = 'Zend' . 'Technologies';
							</div>
							<div>
								When concatenating strings with the "." operator, it is permitted to break the statement into multiple lines to improve readability. In these cases, each successive line should be padded with whitespace such that the "."; operator is aligned under the "=" operator:
							</div>
							<div class="code">
$sql = "SELECT `id`, `name` FROM `people` "
     . "WHERE `name` = 'Susan' "
     . "ORDER BY `name` ASC ";
							</div>
							<h3 class="border-red">Arrays</h3>
							<h4>Numerically Indexed Arrays</h4>
							<div>
								Negative numbers are not permitted as indices.
							</div>
							<div>
								An indexed array may be started with any non-negative number, however this is discouraged and it is recommended that all arrays have a base index of 0.
							</div>
							<div>
								When declaring indexed arrays with the array construct, a trailing space must be added after each comma delimiter to improve readability:
							</div>
							<div class="code">
								$sampleArray = array(1, 2, 3, 'Zend', 'Studio');
							</div>
							<div>
								It is also permitted to declare multiline indexed arrays using the "array" construct. In this case, each successive line must be padded with spaces such that beginning of each line aligns as shown below:
							</div>
							<div class="code">
$sampleArray = array(1, 2, 3, 'Zend', 'Studio',
                     $a, $b, $c,
                     56.44, $d, 500);
							</div>
							<h4>Associative Arrays</h4>
							<div>
								When declaring associative arrays with the array construct, it is encouraged to break the statement into multiple lines. In this case, each successive line must be padded with whitespace such that both the keys and the values are aligned:
							</div>
							<div class="code">
$sampleArray = array('firstKey'  => 'firstValue',
                     'secondKey' => 'secondValue');
							</div>
							<h3 class="border-red">Classes</h3>
							<h4>Class Declaration</h4>
							<div>
								Classes must be named by following the naming conventions.
							</div>
							<div>
								The brace is always written on the line underneath the class name ("one true brace" form).
							</div>
							<div>
								Every class must have a documentation block that conforms to the PHPDocumentor standard.
							</div>
							<div>
								Any code within a class must be indented four spaces.
							</div>
							<div>
								Only one class is permitted per PHP file.
							</div>
							<div>
								Placing additional code in a class file is permitted but discouraged. In these files, two blank lines must separate the class from any additional PHP code in the file.
							</div>
							<div>
								This is an example of an acceptable class declaration:
							</div>
							<div class="code">
/**
 * Documentation Block Here
 */
class SampleClass
{
    // entire content of class
    // must be indented four spaces
}
							</div>
							<h4>Class Member Variables</h4>
							<div>
								Member variables must be named by following the variable naming conventions.
							</div>
							<div>
								Any variables declared in a class must be listed at the top of the class, prior to declaring any functions.
							</div>
							<div>
								The var construct is not permitted. Member variables always declare their visibility by using one of the private, protected, or public constructs. Accessing member variables directly by making them public is permitted but discouraged in favor of accessor variables (set/get).
							</div>
							<h3 class="border-red">Functions and Methods</h3>
							<h4>Function and Method Declaration</h4>
							<div>
								Functions must be named by following the naming conventions.
							</div>
							<div>
								Functions inside classes must always declare their visibility by using one of the private, protected, or public constructs.
							</div>
							<div>
								Like classes, the brace is always written on the line underneath the function name ("one true brace" form). There is no space between the function name and the opening parenthesis for the arguments.
							</div>
							<div>
								Functions in the global scope are strongly discouraged.
							</div>
							<div>
								This is an example of an acceptable function declaration in a class:
							</div>
							<div class="code">
/**
 * Documentation Block Here
 */
class Foo
{
    /**
     * Documentation Block Here
     */
    public function bar()
    {
        // entire content of function
        // must be indented four spaces
    }
}
							</div>
							<div>
								NOTE: Passing by-reference is permitted in the function declaration only:
							</div>
							<div class="code">
/**
 * Documentation Block Here
 */
class Foo
{
    /**
     * Documentation Block Here
     */
    public function bar( &amp;$baz )
    {}
}
							</div>
							<div>
								Call-time pass by-reference is prohibited.
							</div>
							<div>
								The return value must not be enclosed in parentheses. This can hinder readability and can also break code if a method is later changed to return by reference.
							</div>
							<div class="code">
/**
 * Documentation Block Here
 */
class Foo
{
    /**
     * WRONG
     */
    public function bar()
    {
        return($this->bar);
    }
    /**
     * RIGHT
     */
    public function bar()
    {
        return $this->bar;
    }
}
							</div>
							<h4>Function and Method Usage</h4>
							<div>
								Function arguments are separated by a single trailing space after the comma delimiter. This is an example of an acceptable function call for a function that takes three arguments:
							</div>
							<div class="code">
							threeArguments(1, 2, 3);
							</div>
							<div>
								Call-time pass by-reference is prohibited. See the function declarations section for the proper way to pass function arguments by-reference.
							</div>
							<div>
								For functions whose arguments permitted arrays, the function call may include the "array" construct and can be split into multiple lines to improve readability. In these cases, the standards for writing arrays still apply:
							</div>
							<div class="code">
threeArguments( array( 1, 2, 3 ), 2, 3 );
threeArguments( array( 1, 2, 3, 'Zend', 'Studio',
                     $a, $b, $c,
                     56.44, $d, 500 ), 2, 3 );
							</div>
							<h3 class="border-red">Control Statements</h3>
							<h4>If / Else / Elseif</h4>
							<div>
								Control statements based on the if and elseif constructs must have a single space before the opening parenthesis of the conditional, and a single space after the closing parenthesis.
							</div>
							<div>
								Within the conditional statements between the parentheses, operators must be separated by spaces for readability. Inner parentheses are encouraged to improve logical grouping of larger conditionals.
							</div>
							<div>
								The opening brace is written on the same line as the conditional statement. The closing brace is always written on its own line. Any content within the braces must be indented four spaces.
							</div>
							<div class="code">
if ( $a != 2 ) {
    $a = 2;
}
							</div>
							<div>
								For "if" statements that include "elseif" or "else", the formatting must be as in these examples:
							</div>
							<div class="code">
if ( $a != 2 ) {
    $a = 2;
} else {
    $a = 7;
}
if ( $a != 2 ) {
    $a = 2;
} elseif ( $a == 3 ) {
    $a = 4;
} else {
    $a = 7;
}
							</div>
							<div>
								PHP allows for these statements to be written without braces in some circumstances. The coding standard makes no differentiation and all "if", "elseif" or "else" statements must use braces.
							</div>
							<div>
								Use of the "elseif" construct is permitted but highly discouraged in favor of the "else if" combination.
							</div>
							<h4>Switch</h4>
							<div>
								Control statements written with the "switch" construct must have a single space before the opening parenthesis of the conditional statement, and also a single space after the closing parenthesis.
							</div>
							<div>
								All content within the "switch" statement must be indented four spaces. Content under each "case" statement must be indented an additional four spaces.
							</div>
							<div class="code">
switch ( $numPeople ) {
    case 1:
        break;
    case 2:
        break;
    default:
        break;
}
							</div>
							<div>
								The construct default may never be omitted from a switch statement.
							</div>
							<div>
								NOTE: It is sometimes useful to write a case statement which falls through to the next case by not including a break or return in that case. To distinguish these cases from bugs, any case statement where break or return are omitted must contain the comment "// break intentionally omitted".
							</div>
							<h3 class="border-red">Inline Documentation</h3>
							<h4>Documentation Format</h4>
							<div>
								All documentation blocks ("docblocks") must be compatible with the phpDocumentor format.
							</div>
							<div>
								Describing the phpDocumentor format is beyond the scope of this document. For more information, visit: http://phpdoc.org/
							</div>
							<div>
								All source code file written for the Zend Framework or that operates with the framework must contain a "file-level" docblock at the top of each file and a "class-level" docblock immediately above each class.
							</div>
							<div>
								Below are examples of such docblocks.
							</div>
							<h4>Files</h4>
							<div>
								Every file that contains PHP code must have a header block at the top of the file that contains these phpDocumentor tags at a minimum:
							</div>
							<div class="code">
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @copyright  2005 Zend Technologies
 * @license	http://www.zend.com/license/3_0.txt   PHP License 3.0
 * @version	CVS: $Id:$
 * @link	   http://dev.zend.com/package/PackageName
 * @since	  File available since Release 1.2.0
*/
							</div>
							<h4>Files</h4>
							<div>
								Every class must have a docblock that contains these phpDocumentor tags at a minimum:
							</div>
							<div class="code">
/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @copyright  2005 Zend Technologies
 * @license	http://www.zend.com/license/3_0.txt   PHP License 3.0
 * @version	Release: @package_version@
 * @link	   http://dev.zend.com/package/PackageName
 * @since	  Class available since Release 1.2.0
 * @deprecated Class deprecated in Release 2.0.0
 */
							</div>
							<h4>Functions</h4>
							<div>
								Every function, including object methods, must have a docblock that contains at a minimum:
							</div>
							<ul>
								<li>
									A description of the function
								</li>
								<li>
									All of the arguments
								</li>
								<li>
									All of the possible return values
								</li>
							</ul>
							<div>
								It is not necessary to use the "@access" tag because the access level is already known from the"public", "private", or "protected" construct used to declare the function.
							</div>
							<div>
								If a function/method may throw an exception, use @throws:
							</div>
							<div class="code">
@throws exceptionclass [description]
							</div>
<?php
	
	// End page
	$PAGE->end();
?>
