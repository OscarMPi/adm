# PowerShell script to update @author references
$rootPath = "c:\laragon\www\adm\app\adms"
$files = Get-ChildItem -Path $rootPath -Recurse -Filter "*.php"

$count = 0
foreach ($file in $files) {
    $content = Get-Content $file.FullName -Raw
    $originalContent = $content
    
    # Update simple @author Oscar (escaped for regex)
    $content = $content -replace ' \* @author Oscar(?!\w)', ' * @author Oscar monteiro'
    
    # Update @author Cesar <cesar@oscar.com.br> (escaped for regex)
    $content = $content -replace ' \* @author Cesar <cesar@oscar\.com\.br>', ' * @author Oscar monteiro'
    
    if ($content -ne $originalContent) {
        Set-Content -Path $file.FullName -Value $content -NoNewline
        Write-Host "Updated: $($file.FullName)"
        $count++
    }
}

Write-Host "Total files updated: $count"
