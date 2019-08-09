const axios = require('axios')
const cheerio = require('cheerio')
const fs = require('fs')

const ids = ['IXGYbTrS','ppbF54bS','pj1Pd9Fc','vRu2ASqc','p63R0kEF','bFYDvet4','nieBloXk','EP9UAylh','r51o7gmH','QsfFm5nd','vorcClPd','C4X57Kst','8WQE5bCh','nNPI4IRb','xbwcmHdO','jeW96vcn','GrklkwSB','zqd0nyCU','fZmhlcsI','n9ppjJC5','pxMSKDSf','2DWNLgDl','OMXJMZcr','rNvWJXs1','xpvzJic7','GzwvIBCD','feT1u7Hl','6VYECGK6','veFXawy1','KEz7Exjf','YHEyacj7','MweWKvDQ','U7S88SUq','t83RA6hI','bqEMBnwC','KhFICSN5','CSBAElgg','8EeDY9pP','vNuZXxfE','U3M5FUwm','WI32GAOt','YcS0zN13','tOV8Y0WF','hMmejmZo','0fD2fNTM','voC6gsqT','4b4xE5FA','viqStbKH','GSAukFOb','xxCyje9h','Y35plZw5','6irqAo7t','fFFFRDxE','fZqConcc','Gro8nSsi','SSiQNr5j','reGgT4sT','xbZGp6C3','8djSs4dM','lxgMOOkp','zqhKqQR9','U5iOrpsG','QXpXtOBS','StXbxrKq','8EVFyIhS','I3Nh7FsK','GdAa36tn','6LJLRtP3','YuXDTz8r','4GBujbvd','SnrUDMm0','d6vy4dlA','ATtTxBAF','IJFqkIg2','AD2VCLo9','hhWXyVPL','dAKCWKQA','WrVyykuS','6udvBaGL','tIG7VS2k','SlczCu1F','02erAJVR','Ot6CUnIe','U7AEo2ts','2RH3W8mq','6wsYCt36','xpAGT6X1','E7brThg4','zLPeLs2H','AkUNOP16','jmbbhjA2','zmlLwgp7','0Y15rYhi','zenA5wvq','nFi7jUvF','IJyF4cgk','SMpDuFFf','OK0HVXi4','E5ymN3X4','Uwc2iAP8','vT0anLfM','Orq4MTEj','00nR1LD6','MweKZbTj','dYbPTBMG','Wt056zhI','2kGveXUb','I1EvYLOm','bBMnWag0','GnXsXuvf','bHFB7Dir','t6lq4zd8','pSObTcwJ','GxviY44a','YXIFVtBm','hxjsn0Qc','roT3JLWT','6yQfUwOC','nX2shsGJ','YNe98kmf','jeKbrByA','MXJuRA1C','d4LWmSL4','EiAOijo3','lOTaK1HN','0pS57920','noIiLrpr','Iw8HWtSD','dICk0LT6','n1UH47nJ','nyqC2GSG','KlaWNUns','K0sZyiMq','xb9ggMzL','neeYGTmd','pfFVEuuo','x2LjVJ86','trrdm1uG','vXAGqFk4','MBbEwPHo','YsEEidfA','rRrfqbAG','GrR71dxE','UafA2Fqo','rDB0JMEf','Aa1v7mkP','ltkcwPGa','lSNYyG2j','MqrIDM40','jTJVsYYH','0lMeK2al','dUnbrIPM','t2OUxdmp','v3VgtDEN','vFN0Dlmc','ADpnoKu4','SIMxyzId','WjmJqSLd','pQmzQ5mn','riAtDZTK','nePVRbAC','n1jmKnn6','QikiJ61C','rTqdIQGI','M9mN21b0','SlwuPP2h','MJr0HpWO','23wLvXu3','pfiNrny3','OCvHuDQd','EoV7X0B4','6uxqOqIb','QovDMzyH','YH8aPczr','bPJkKEH2','pMV7eVv2','jcyFk4Uk','zg9EmSJh','WQuvuwmd','YVJM3MPd','MgkcDaeJ','WMDIlvmI','nJwvUci3','tMjh6fad','GbVfQFjS','6iSnIznK','QeTrF7Vu','MkH2OTXo','tnEyDDSS','re038Xzp','vNgC6B5d','hQsfVfrc','40obUEc3','nPz3TYC9','QFZ6ShSF','QqeI0Jks','Y9bQbcKg','C0cUcHZa','QiPltx9n','rTZqsIgt','veThudOh','vVccxf8B','OfipPTbF','bTe386E9','fP2s587q','2RuBMnKl','hCvlmWqG','KM8yf7aG','Ozs7NS4r','GEqg1TrC','rPit4Vbg','dSHFIUDn','Ovm1a7DO','KUOEkRHq','lr2s8ZXA','hln1B8v3','hG8Y9e3b','zubw9FI4','WUuhRFkR','hvslSezL','xb1S6Hgh','j15W5y9b','EyhVLx50','jeGGWnmI','jJAED88a','fB7V9Q7O','A5KkcPq4','4SJgdqaA','rJIce3EG','bVGob5Uc','Ui2Mm7VJ','rudt1M6P','AXSocJ4b','rFCXjyfn','neH5K565','UJ6AJPLB','rNAEIqyI','8UqlkNA3','xpAIH3jO','KtgsSeoe','r3GtRcbL','CKsR6qu1','dWcr2dPP','GObIJ5k6','tb0XNyGh','6LBIKEm2','04lnABk9','vo2Ly7yt','WUqrBiz3','Iy1PzRjn','2DQUL3Ch','fwSpST4q','8EXLNPst','IBDxtKCe','KlyQMqcn','vRwA16IG','lUStJ1dB','YwQO0TSb','QT6Cpezb','6HZuhDFB','65ocIXqU','Am1DZ4ap','Wfi4syor','r5kFRYrE','G8njQZF7','IiwpiXUH','EXqICVEp','tACucoSN','6ww0Q53p','G2FTamr5','KIC4QJeB','xU54YjyR','OY1pd5sU','WhIoILBH','0fgCiPko','UBzYlJh8','6oBj8prg','lhXa4ld6','82Zylw8E','EcsfG8So','hltbFSsh','zP5YncNK','IkdI5hma','GjcptRWt','0vgO7SMa','EF4xnHxR','2D4a6OC5','fcpYtazd','8rgoFjjg','APz3Encb','lA0e74ca','veq0s1kg','zRftb5Jo','dz435rSB','MZxBCgHQ','vJLgGatU','CxBYMZTA','WQN64RDq','f1hS6nx6','zR2742sI','zi6zW4nT','YiiW56iC','jToy5Q6I','tS7LBJlo','UJpu4pMO','WMi6QrAj','4di3idn9','YLSkjCM7','8vykkSni','hSx1nQW9','IaTx7gWk','ziS5opnG','rNYMSTbP','IFPlOm7t','C8m627ct','Qiudrszm','CGkZTHGr','0vFgN7Mn','6XqMjIYC','0rR3Ytdb','vVDcMRyg','vohlqe0P','0SKyEFEE','MVQIBx1b','6LRaZMth','SUSez3Ro','tjfwTyWl','pdMkHuRN','MyMXEea8','Q5hahxX2','voUuZAxI','WhdG2tCU','zHg3Q65H','lKc7PQKN','zmApNSUN','hO4kMnpU','lGZ6D6C4','Ie9XI3Rs','6RKOYWNM','2393RVqN','6aEo6uSJ','4zfMaw5m','YHSdvGwa','C8R0wzg5','ILd1yENH','8SMUA6oI','UcR2utUc','hMuTFlig','ry2O7cvn','KEhRMIkf','CtZPtXAP','C4HCXSXB','n7Z6gevF','xxhGWXW1','29OBzOlt','OhYLa6s2','Wfgs7lkS','n7iV9j59','0YBdJA96','WpvmYRu7','xbids58m','ImRhMMx4','YNmPGldI','QcpHIAR5','txeOXN5P','juGrmkal','zwyLgvaa','nDvPhbE5','b7MzhZQP','Iu5paklm','8UccdmY5','6ce0SwTo','K0a4Rcrh','2Pl9QHcb','WUHzlKj1','KKBEom9J','QRXPEEbf','rVY50dpF','0trde2bR','QZm7ue8k','EubDgIPc','SK3szc66','jiShh0f5','UqtAjRup','fiFAhxu4','2Xl7bzFR','Akjgv51g','bBAIp7OP','4tyZgfNr','trf8jtvE','ba2hNxco','nLt8jG1F','pUy4PPIj','OUXnkecJ','IHhidrqL','b3zwgExk','OKzcWfsB','Ea0MSW0n','rZ4QRjGh','KnMY0K9F','0bwWavPL','6Jt4zWdF','KY0aSU0j','QB1eTAop','ljATXjwT','lnQKWDUc','SxPOVXq4','Wtb1blpr','zBCV3AMK','U9N57oWB','raWpl8WC','AuFKd3fk','IyayuvgE','4lTBMnqG','vqoereEC','jFhx8JeR','xClY8atL','fPIQBnWB','02JMCSG5','EkyYMS4A','CGwN4Rwc','dxyNhJfF','QyBlU1dn','CY6pVsst','G0Aa6xPE','O0Ofs2ao','4GJFxvEG','8lQ6v0q4','CtNNzIrT','6a6MCcJu','jTgkEkwm','Qgdyhurg','8Iotiaca','dCmuUH58','jgol9GTr','AFiqTyLE','hY3yRQ78','KMU1jd9B','WdY5kGOH','QJX9lzvO','4AWDmfgU','4p3K8wPu','8KrYZekD','0fuQyIK0','UTqUzxz7','6gialwza','2sdkJXkT','MRxMDBDj','zVQ3xeji','phWuoqQA','8jaJHyIn','zwJAlwl0','fqFoy8dn','x4U2F6hG','GW6A0OPc','vBP1jaJm','GG2RFFna','dYfg6mcC','8jwl2dIa','ruvWeLeQ','AJX0TJb8','Me62XPeB','0pGMoyYI','U1TTmoth','z3U4bEHO','Y9duZclD','pzoPxtkl','xYms9kDg','C2GKw1Ip','6LaNcM9G','xOhpSqxM','63xpTA4P','lvY6EQ7M','QTzYHpdO','rPTBOUCt','jBUPlRQo','4bb14RRO','dlqHLSda','zurLKnC5','COqu4Imm','CpaFUNuU','UcgtTPMF','xneJb2fA','Eo7to4s8','2TtynPA4','hIZmqNfN','MTXRDgHB','txDo7r0d','rDuF5G61','Isdk7Ts6','QR9EIH2t','GltfHSN3','6qnLwMZs','na5lqrCK','rBlwAVcm','8OxnJlgi','2kf5AKAJ','plQciu4s','029hr2RQ','Uavp3x3g','E9kTy04f','GhGsxlst','Q9CeuEgk','Q7ac57CI','0ljA6die','U1sPJ6RB','INaBV3QN','h0lXzKJ0','nFyjI88c','YZF3whO1','MeUGMNaq','Mci67xxk','bedFaru4','lAW4SwEE','pAJx94Vq','W8YirsAT','Q3qRd1tK','MgHInHIC','vX07WqBH','hx6ppOdE','4KkZABrs','8r5XUoh3','jgFOxLXj','Ghb99vQP','GxSJM8sg','0KWVCDWH','dGqJ4zM7','CQE7xCw8','l6jsQslo','r5oTIQtI','4d3614Ai','GEilR3iS','OxrXn5eb','hGfaeo1p','2Dxh1GX5','fu1TVRxc','Mg3NGeXh','6Jb3f5Gj','f71VEZ15','zPwxzvZ6','2oEs8Opj','x84jzSBh','Emtd0zmC','vDGavY8e','zJ6p89Sa','SGDnU0cK','MwDjTKCQ','OnaIOvLs','tOgNNbzl','zTTSg9ha','EJSWhT75','ClTlImYO','4vE4Zl3a','YcUpJTII','rVC8Y8I5','MFOazVmg','8CKeyBYn','0WtVYIv8','dfMgtJWR','bogCXDHe','tAb7Yg2k','INa8m4W2','GWURWul5','Krx0t8wh','QVkosoT9','buh92hem','htArh9Uo','Eebijmab','4QG0TPio','WW8niTqh','p2ZH0nSe','v1G8N9Z8','GSUD1SCk','QcC4OkK2','v5WVNgTb','0EXROZDh','lb8hKjf0','feB0IUOC','6ZImLWvf','SrKqMCPm','YoA4HlvJ','buxUzIcF','lAfwEfj2','Ignzf92Q','biWYeVXD','xrVxekmK','lMlrZ7Q0','UXXVys9g','GlzrZvgC','xbyvzLw6','YPUnYb8I','b7hhrogs','tWLRRP80','ldPZP3wD','SnOwPNhJ','8Iq2aaVj','dYxpOr8i','231Tt9wQ','ngYmCmji','jg3LuGFC','S8cNkwxP','lIbJjJMI','W4tBOotM','AeuFN5eS','jeY2Q7B9','WYXw4r8P','jJEAbMVn','IRoJ3879','GC4M2SMF','U55OsRpj','8d4Sto0d','dCcA5Uxc','lIhSIgV3','S8iWHDpA','ppnyHXaG','AZ3Q1nxM','lQ2U06iS','IB5Y7gDm','Qy9t6Xs0','nick4BCC','dIh0MhSt','4S7p5ic6','4OHYmgN7','0f1g3VRI','EckySE4J','hlluRYJP','z9i4LCsm','4lqLHUtC','UVj8KWdg','rZfCJjCa','GCxjPOmB','IFLNqf45','Ic6VEMUC','rkVQ0K90','Kvd3tbKG','6efBvxkT','S4e7uIZM','KEzBOAi1','ban2QWMl','xjo6Pjxe','W2sdnEq8','IagENU67','KdPChByR','ClHvlVqr','UyUTiITB','ATlKEgHt','vk6t0VYt','86JE4BQP','E7bgcTIa','04fkb93g','MoyJWfYs','W06LqKnJ','Wv9TiHvt','rHmniVgH','rsJsfX9b','lflrhBvB','zuQVSzkf','MyMRTGZm','U1PZRf40','pYkjAdDH','joLj8zrU','OOlf9GSN','hf7I3fjo','ULcjlRu0','rqbYOACl','6qKyvrSp','4bnsNls1','drI45HHJ','6FQBdamL','YXjoM8d7','ETTXqClE','COkkLSBD','rVvlKFZ6','MgXurjJQ','tY4tCvOt','SWXyqW3K','O2J7wARs','UqxDvaZB','nqLH9PLL','MJY4tL4a','ANZyq1G6','2DltMFp5','0AX8uuK5','dUKqSQGg','h69kgtua','z9wP9bJk','OdfoBbwm','nLpb0Fq1','r5Z8yldf','nHMxqyy8','E7nj2yFl','xSYCz8B0','4Ez5xUtl','jRIIUpQc','jVxHZRQ6','YgSLYotD','CpRPX5eJ','MqKTstrq','viJBe9mQ','00K7dkYJ','SW1eaZb7','rsLySjn6','d8arjmBm','lnCzdDFh','h8MuXy2q','pYeviTes','llTCi8nc','jBj1dmB8','QXhMaRm2','WjLrtcdQ','8bebeJG1','OAVjxHfN','2gYHjepk','zir95fSp','4CHJpzka','vJH9Boi9','O0xWtaIq','hzsztJXk','hKWBYZao','vHrU9jNp','6NzGXgFi','0hbFDt1U','YuTTW31h','6VKtU1oB','SvMxVsW4','pGWXVNGb','0SULYPWu','vJTPXqnn','z5PpTL0H','8ltZ4j7E','E1BZ2UyR','tlVhAmng','zmO18RG5','80M965oI','UVU0Qlfd','pvDmlhn3','hYL3ouPa','EsNanL9g','neL7pav6','bVOBqJgC','tfEGrw9I','MkVlmSoJ','xbDyBVwQ','UehG3mWa','Q7wl2PWR','xYRX57X2','dYYq35HL','86HpIGo1','MN028LzQ','CfIoGpMq','ruSFL6bM','8MZ2O8E3','UixsmJas','KIn7gLMD','rHinpHq0','lfhrocUg','YLjBhuxK','SrjFiaiQ','GpMQpTID','A3gvnwFm','dKejqya6','Slwza3LF','fX0ibuBF','6FMukSii','j7vgROap','bkF6te5l','6ZlR0Pj3','vTduwMbd','lbvWaq69','hWpN15yc','EPyQXQMG','thH4qOLS','tCwIZnh4','fygNWpxN','YRiRV4iT','EuQmm6M3','KbG2syjr','zeEdopiG','r13WvrUq','p6Lqln7c','zZxMY67A','4ArcQrFj','hWOinQyA','0xbyv2qj','KbrOhKgs','dI6VUcv1','E7A41HYf','nov82cJl','hb980yl1','MBAstgal','jsap0EjK','4timmhk4','MHohnC4A','08pdoWJG','Kh3y2OZf','C6MKGeT3','jcLOFFrA','YLATEZcG','nPEXDgDM','vuB2tkst','IV96u9dn','Ec3FwmRb','z74BvTBh','K2Ik5asQ','YwfUsc5q','llek0QXL','jiM7ZaOs','fqsXu2oE','6P5p16IF','GbVuvtGQ','zBldjqMi','dKkhiP6o','2asQmj0g','tjtUnAFa','WvZtp8aI','84dASuUp','C4ijo2O8','YDhnnr92','pba4NbW1','KAQZxvWl','fTtepMwF']

    async function main(){
        Promise.all(ids.map(async (id) => {
            return new Promise((resolve,reject)=>{
                axios.get(`https://www.mismarcadores.com/partido/${id}/#resumen-del-partido`).then((res)=>{
                    let $ = cheerio.load(res.data)
            let imgsrc = $('img[width="50"]').map((i,x)=> $(x).attr('src')).toArray().map((x)=>x = 'https://www.mismarcadores.com/'+x)
            let equipos = $('.participant-imglink').map((i, x) => $(x).text()).toArray().filter(x=>x.length > 1)
            let resultado = $('#event_detail_current_result').text().trim()
            let torneo = $('.fleft').text().trim()
            let fecha = ['23/07/2019','24/07/2019','25/07/2019','26/07/2019','27/07/2019','28/07/2019','29/07/2019','30/07/2019','31/07/2019']
            let hora = ['16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30']
            let fechaa = Math.floor(Math.random() * 8)
            let equipoimg = {local:equipos[0],localimg:imgsrc[0],visitante:equipos[1],visitanteimg:imgsrc[1],score:resultado,competition:torneo,date:fecha[fechaa],hour:hora[(Math.floor(Math.random() * 11))],stadium:Math.floor(Math.random()*2)+1,end:fecha[fechaa+1]}
            console.log(equipoimg)
                resolve(equipoimg)
            }).catch((err)=>{
                reject(err);
            })})})).then((partidoss)=>{
            console.log(partidoss)
            let ordenequipos = []
            fs.writeFile('partidos.json',JSON.stringify(partidoss),(err)=>{
                console.log(err)
            })
            let i = 0;
            partidoss.forEach(partido =>{
                function search(nameKey, myArray){
                    for (var i=0; i < myArray.length; i++) {
                        if (myArray[i].equipo == nameKey) {
                            return true;
                        }
                    }
                    return false;
                }
                if(search(partido.local,ordenequipos)){
                    if(search(partido.visitante,ordenequipos)){
    
                    }
                    else{
                        console.log("Añadiendo equipo")
                        ordenequipos.push({equipo:partido.visitante,img:partido.visitanteimg,stadium_id:partido.stadium})
                    }
                }
                else{
                    console.log("Añadiendo equipo")
                    ordenequipos.push({equipo:partido.local,img:partido.localimg,stadium_id:partido.stadium})
                    if(search(partido.visitante,ordenequipos)){    
                    }
                    else{
                        console.log("Añadiendo equipo")
                        ordenequipos.push({equipo:partido.visitante,img:partido.visitanteimg,stadium_id:partido.stadium})

                    }
                }
                i++;
                console.log(i,partidoss.length)
                if(i == partidoss.length){
                    fs.writeFile('orderequipos.json',JSON.stringify(ordenequipos),(err)=>{
                        console.log(err)
                    })
                }
            })
            let competiciones = []
            let g = 0
            partidoss.forEach(partido=>{
                function search(nameKey, myArray){
                    for (var i=0; i < myArray.length; i++) {
                        if (myArray[i].nombre == nameKey) {
                            return true;
                        }
                    }
                    return false;
                }
                if(search(partido.competition,competiciones)){

                }
                else{
                    competiciones.push({nombre:partido.competition,start_competition:'01/01/2019',end_competition:'03/08/2019'})
                }
                g++
                if(g==partidoss.length){
                    fs.writeFile('ordercompeticiones.json',JSON.stringify(competiciones),(err)=>{
                        console.log(err)
                    })
                }
            })
           
            
    })
    }
    main()
    

