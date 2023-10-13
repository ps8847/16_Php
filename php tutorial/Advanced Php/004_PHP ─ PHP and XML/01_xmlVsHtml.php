XML is a markup language that looks a lot like HTML. An XML document is plain text and
contains tags delimited by < and >. There are two big differences between XML and HTML:

 XML doesn't define a specific set of tags you must use.
 XML is extremely picky about document structure.

XML gives you a lot more freedom than HTML. HTML has a certain set of tags: the
<a></a> tags surround a link, the <p> starts a paragraph and so on. An XML document,
however, can use any tags you want. Put <rating></rating> tags around a movie rating,
<height></height> tags around someone's height. Thus XML gives you option to device
your own tags.
XML is very strict when it comes to document structure. HTML lets you play fast and loose
with some opening and closing tags. But this is not the case with XML.


HTML list that's not valid XML

<ul>
<li>Braised Sea Cucumber
<li>Baked Giblets with Salt
<li>Abalone with Marrow and Duck Feet
</ul>

This is not a valid XML document because there are no closing </li> tags to match up with
the three opening <li> tags. Every opened tag in an XML document must be closed.

HTML list that is valid XML

<ul>
<li>Braised Sea Cucumber</li>
<li>Baked Giblets with Salt</li>
<li>Abalone with Marrow and Duck Feet</li>
</ul>

