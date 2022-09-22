import { PDFDocument } from 'pdf-lib';

//convert the pdf to a Uint8Array
const formPDFbytes = fs.readFile('/assets/pdf/Dossier-inscription-2022');

//load the pdf from the existing pdf bytes
const pdfDoc = await PDFDocument.load(formPDFbytes);

const form = pdfDoc.getForm()

form.getTextField('Inscription_Nom').setText('Hemery')
form.getTextField('Inscription_Prenom').setText('Jules')

form.flatten()

pdfDoc.setTitle("test")
const pdfBytes = await pdfDoc.save()



