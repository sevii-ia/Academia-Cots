$emailFrom = "12936662@institutocots.com"
$emailTo = "12936662@institutocots.com"
$subject = "PC Powered On"
$body = "Your PC was powered on at $(Get-Date)"
$smtpServer = "smtp.ionos.es"
$smtpPort = 587
$smtpUser = "12936662@institutocots.com"
$smtpPass = "Zyabkin1293#"

Send-MailMessage -From $emailFrom -To $emailTo -Subject $subject -Body $body -SmtpServer $smtpServer -Port $smtpPort -Credential (New-Object PSCredential($smtpUser, (ConvertTo-SecureString $smtpPass -AsPlainText -Force))) -UseSsl