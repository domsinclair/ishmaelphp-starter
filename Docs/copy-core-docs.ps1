# Copies Ishmael Core documentation into this Starter's Docs/Core folder

param(
  [string]$Source = "D:/JetBrainsProjects/PhpStorm/ish/IshmaelPHP-Core/Documentation",
  [string]$Destination = "./Docs/Core"
)

Write-Host "Copying Core docs from: $Source" -ForegroundColor Cyan
Write-Host "To: $Destination" -ForegroundColor Cyan

if (!(Test-Path $Source)) {
  Write-Error "Source path does not exist: $Source"
  exit 1
}

New-Item -ItemType Directory -Force -Path $Destination | Out-Null

Copy-Item -Path (Join-Path $Source '*') -Destination $Destination -Recurse -Force

Write-Host "Done. Local docs available under Docs/Core." -ForegroundColor Green
