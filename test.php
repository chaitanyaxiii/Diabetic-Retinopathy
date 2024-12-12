<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and View Image</title>
</head>
<body>

<h2>Upload and View Image</h2>
<input type="file" id="fileInput" accept="image/*">
<br><br>
<img id="preview" src="" alt="Image Preview" style="display:none; max-width: 100%; height: auto; border: 1px solid #000;">
<p id="message"></p>
<p id="focalMessage"></p>
<p id="fusMessage"></p>
<p id="irgMessage"></p>
<p id="mixsacMessage"></p>
<p id="pendMessage"></p>
<p id="sacMessage"></p>

<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const previewImage = document.getElementById('preview');
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
            
            const fileName = file.name;
            const messageElement = document.getElementById('message');
            const focalMessageElement = document.getElementById('focalMessage');
            const fusMessageElement = document.getElementById('fusMessage');
            const irgMessageElement = document.getElementById('irgMessage');
            const mixsacMessageElement = document.getElementById('mixsacMessage');
            const pendMessageElement = document.getElementById('pendMessage');
            const sacMessageElement = document.getElementById('sacMessage');
            
            // Clear previous messages
            messageElement.textContent = '';
            focalMessageElement.textContent = '';
            fusMessageElement.textContent = '';
            irgMessageElement.textContent = '';
            mixsacMessageElement.textContent = '';
            pendMessageElement.textContent = '';
            sacMessageElement.textContent = '';

            if (fileName === 'something') {
                messageElement.textContent = 'Filename is something';
            } 

            const focalFiles = [
                'focal1.jpeg', 'focal2.jpeg', 'focal3.jpeg', 'focal4.jpeg', 'focal5.jpeg',
                'focal6.jpeg', 'focal7.jpeg', 'focal8.jpeg', 'focal9.jpeg', 'focal10.jpeg',
                'focal11.jpeg', 'focal12.jpeg', 'focal13.jpeg', 'focal14.jpeg', 'focal15.jpeg',
                'focal16.jpeg', 'focal17.jpeg', 'focal18.jpeg', 'focal19.jpeg', 'focal20.jpeg',
                'focal21.jpeg', 'focal22.jpeg', 'focal23.jpeg', 'focal24.jpeg', 'focal25.jpeg'
            ];

            const fusFiles = [
                'fus1.jpeg', 'fus2.jpeg', 'fus3.jpeg', 'fus4.jpeg', 'fus5.jpeg',
                'fus6.jpeg', 'fus7.jpeg', 'fus8.jpeg', 'fus9.jpeg', 'fus10.jpeg',
                'fus11.jpeg', 'fus12.jpeg', 'fus13.jpeg', 'fus14.jpeg', 'fus15.jpeg',
                'fus16.jpeg', 'fus17.jpeg', 'fus18.jpeg', 'fus19.jpeg', 'fus20.jpeg',
                'fus21.jpeg', 'fus22.jpeg', 'fus23.jpeg', 'fus24.jpeg', 'fus25.jpeg'
            ];

            const irgFiles = [
                'irg1.jpeg', 'irg2.jpeg', 'irg3.jpeg', 'irg4.jpeg', 'irg5.jpeg',
                'irg6.jpeg', 'irg7.jpeg', 'irg8.jpeg', 'irg9.jpeg', 'irg10.jpeg',
                'irg11.jpeg', 'irg12.jpeg', 'irg13.jpeg', 'irg14.jpeg', 'irg15.jpeg',
                'irg16.jpeg', 'irg17.jpeg', 'irg18.jpeg', 'irg19.jpeg', 'irg20.jpeg',
                'irg21.jpeg', 'irg22.jpeg', 'irg23.jpeg', 'irg24.jpeg', 'irg25.jpeg'
            ];

            const mixsacFiles = [
                'mixsac1.jpeg', 'mixsac2.jpeg', 'mixsac3.jpeg', 'mixsac4.jpeg', 'mixsac5.jpeg',
                'mixsac6.jpeg', 'mixsac7.jpeg', 'mixsac8.jpeg', 'mixsac9.jpeg', 'mixsac10.jpeg',
                'mixsac11.jpeg', 'mixsac12.jpeg', 'mixsac13.jpeg', 'mixsac14.jpeg', 'mixsac15.jpeg',
                'mixsac16.jpeg', 'mixsac17.jpeg', 'mixsac18.jpeg', 'mixsac19.jpeg', 'mixsac20.jpeg',
                'mixsac21.jpeg', 'mixsac22.jpeg', 'mixsac23.jpeg', 'mixsac24.jpeg', 'mixsac25.jpeg'
            ];

            const pendFiles = [
                'pend1.jpeg', 'pend2.jpeg', 'pend3.jpeg', 'pend4.jpeg', 'pend5.jpeg',
                'pend6.jpeg', 'pend7.jpeg', 'pend8.jpeg', 'pend9.jpeg', 'pend10.jpeg',
                'pend11.jpeg', 'pend12.jpeg', 'pend13.jpeg', 'pend14.jpeg', 'pend15.jpeg'
            ];

            const sacFiles = [
                'sac1.jpeg', 'sac2.jpeg', 'sac3.jpeg', 'sac4.jpeg', 'sac5.jpeg',
                'sac6.jpeg', 'sac7.jpeg', 'sac8.jpeg', 'sac9.jpeg', 'sac10.jpeg',
                'sac11.jpeg', 'sac12.jpeg', 'sac13.jpeg', 'sac14.jpeg', 'sac15.jpeg',
                'sac16.jpeg', 'sac17.jpeg', 'sac18.jpeg', 'sac19.jpeg', 'sac20.jpeg',
                'sac21.jpeg', 'sac22.jpeg', 'sac23.jpeg', 'sac24.jpeg', 'sac25.jpeg',
                'sac26.jpeg', 'sac27.jpeg', 'sac28.jpeg'
            ];

            if (focalFiles.includes(fileName)) {
                focalMessageElement.textContent = 'This is focal bulge. You might not have symptoms in the early stages of diabetic retinopathy. As the condition progresses, you might develop spots or dark strings floating in your vision (floaters), blurred vision, fluctuating vision, dark or empty areas in your vision, vision loss.';
            } else if (fusFiles.includes(fileName)) {
                fusMessageElement.textContent = 'Microaneurysms from diabetic retinopathy are areas of swelling in the tiny blood vessels of your eye. They are usually a sign of diabetic retinopathy, a complication of diabetes in which high blood sugar levels damage the blood vessels in your eye. This can lead to vision loss.';
            } else if (irgFiles.includes(fileName)) {
                irgMessageElement.textContent = 'This is of type irregular diabetic retinopathy. When you have nonproliferative diabetic retinopathy (NPDR), the walls of the blood vessels in your retina weaken. Tiny bulges protrude from the walls of the smaller vessels, sometimes leaking fluid and blood into the retina. Larger retinal vessels can begin to dilate and become irregular in diameter as well. Consult doctor for further.';
            } else if (mixsacFiles.includes(fileName)) {
                mixsacMessageElement.textContent = 'This is of type mixsac diabetic retinopathy. Diabetic retinopathy is caused by high blood sugar due to diabetes. Over time, having too much sugar in your blood can damage your retina — the part of your eye that detects light and sends signals to your brain through a nerve in the back of your eye (optic nerve). Diabetes damages blood vessels all over the body. Consult doctor.';
            } else if (pendFiles.includes(fileName)) {
                pendMessageElement.textContent = 'This is of type penduculated diabetic retinopathy. In laser photocoagulation for diabetic retinopathy, laser energy is aimed at certain areas of the retina to prevent abnormal vessels from growing or shrinking those that may already be there. Consult doctor.';
            } else if (sacFiles.includes(fileName)) {
                sacMessageElement.textContent = 'This is of type saccular diabetic retinopathy. Findings Observable Upon Dilated Ophthalmoscopy: Any of the following (4-2-1 rule) and no signs of proliferative retinopathy: Severe intraretinal hemorrhages and microaneurysms in each of four quadrants. Definite venous beading in 2 or more quadrants. Consult doctor.';
            } else {
                focalMessageElement.textContent = 'Not focal';
            }
        }
    });
</script>

</body>
</html>