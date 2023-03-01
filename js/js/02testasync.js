console.log('avant');
setTimeout(function() {console.log('affiché après 2 secondes')},2000);// ATTENTION : PAS BLOQUANT
console.log('après');