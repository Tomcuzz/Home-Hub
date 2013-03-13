function executeBash() {
   
var file = Components.classes["@mozilla.org/file/local;1"]
                     .createInstance(Components.interfaces.nsILocalFile);
file.initWithPath("/var/www/default/files/netinfo.sh");

var process = Components.classes["@mozilla.org/process/util;1"]
                        .createInstance(Components.interfaces.nsIProcess);
process.init(file);

process.run(false);

}