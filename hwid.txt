const app = require('express')()

app.get('/returnExecutor', async (req, res) => {
    const allowedHeaders = ['fingerprint', 'syn-user-identifier', 'sentinel-fingerprint', 'proto-user-identifier', 'shadow_hardware', 'krnl-hwid', 'exploit-guid']
    const exploits = {
        'fingerprint': 'ScriptWare',
        'syn-user-identifier': 'Synapse X',
        'proto-user-identifier': 'ProtoSmasher',
        'shadow_hardware': 'Shadow',
        'krnl-hwid': 'KRNL',
        'sentinel-fingerprint': 'Sentinel',
        'exploit-guid': 'Sirhurt'
    }
    let exploit
    for (const header of allowedHeaders) {
        if (req.headers[header]) {
            exploit = exploits[header]
        }
    }
    if (!exploit) {
        return res.end('No Executor Detected.')
    } else {
        return res.end(exploit)
    }
})

app.listen(80, () => {
    console.log('online!')
})
