<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta name="generator" content="Bluefish 2.2.5" >
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<title>HackHarder esp8266 dev environment</title>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</head>
<body>
<pre class="prettyprint">
sudo apt-get install virtualbox
sudo apt-get install vagrant
vagrant box add precise32 http://files.vagrantup.com/precise32.box
vagrant init
vagrant up
</pre>
For our purposes Virtualbox should be able to access the USB devices. Usually if you running as a non-root user that is not the case. In order to check if your Virtualbox has access to the USB devices, please run the following command:
<pre class="prettyprint">
VBoxManage list usbhost
</pre>
If you do not get an output similar to this one:
Host USB Devices:

<pre class="prettyprint">
UUID: c031bc0f-406d-4960-ae7b-218a2534e22f
VendorId: 0x046d (046D)
..
Current State: Busy
...
</pre>
Then you have to add your current user to the vboxusers group. This can be done with the following command:
<pre class="prettyprint">
USERNAME=`whoami`;
sudo useradd -G vboxusers $USERNAME
</pre>
To test if you are now able to access the USB devices from your virtualbox you should open a new terminal and from there run
<pre class="prettyprint">
VBoxManage list usbhost
</pre>
This time you should see a list of available USB devices.
</body>
</html>
