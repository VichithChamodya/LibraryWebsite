<style>
  .overlayTerms {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
  }
      
  .popupTerms {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    height: 600px;
    color: white;
    transform: translate(-50%, -50%);
    padding: 20px;
    border-radius: 12px 12px 12px 12px;
    box-shadow: 0 0 6px gray;
    background: rgba(0, 0, 0, 0.7);
    overflow-y: auto;
  }

  .popupTerms::-webkit-scrollbar {
    width: 12px;
  }

  .popupTerms::-webkit-scrollbar-thumb {
    background-color: orange;
    border-radius: 12px;
  }

  .popupTerms::-webkit-scrollbar-track {
    background-color: rgba(255, 255, 255, 0);
  }
        
  .close-btn-Terms {
    position: sticky;
    top: 0;
    padding-left: 340px;
    cursor: pointer;
  }
</style>

<div class="overlayTerms" id="userTermsAndConditions">
  <div class="popupTerms">
    <span class="close-btn-Terms" onclick="closeUserTermsAndConditions()">&times;</span>

    <h3 style="color: orange;">Terms & Conditions</h3><br>
    <h5 style="color: orange;">1. Acceptance of Terms</h5>
    <p>Welcome to the library website ("the Website"). By accessing or using the Website, you agree to comply with and be bound by these Terms and Conditions, the Privacy Policy, and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing this Website.</p>
    <h5 style="color: orange;">2. Use of Content</h5>
    <p>All content provided on this Website, including text, images, videos, and downloadable materials, is for informational and educational purposes only. The content is the property of the library or its licensors and is protected by copyright and other intellectual property laws. Users may not reproduce, distribute, modify, or create derivative works from the content without explicit written permission from the library.</p>
    <h5 style="color: orange;">3. User Accounts and Responsibilities</h5>
    <p>Users may be required to create an account to access certain services or resources on the Website. By creating an account, users agree to provide accurate and complete information and to maintain the confidentiality of their account credentials. Users are responsible for all activities conducted under their accounts.</p>
    <h5 style="color: orange;">4. Privacy Policy</h5>
    <p>The collection, use, and disclosure of personal information provided by users are governed by our Privacy Policy. By using this Website, you consent to the collection and use of your information as described in the Privacy Policy.</p>
    <h5 style="color: orange;">5. Access and Usage</h5>
    <p>The library reserves the right to modify, suspend, or terminate access to all or any part of the Website without prior notice. Users agree not to engage in any activity that may disrupt or interfere with the functioning of the Website or its services.</p>
    <h5 style="color: orange;">6. Intellectual Property Rights</h5>
    <p>All trademarks, logos, and intellectual property displayed on the Website are the property of the library or their respective owners. Users are prohibited from using, reproducing, or distributing these materials without prior written consent.</p>
    <h5 style="color: orange;">7. External Links</h5>
    <p>The Website may contain links to third-party websites or resources. These links are provided for convenience and informational purposes only. The library does not endorse, guarantee, or assume responsibility for the accuracy or content of these external sites.</p>
    <h5 style="color: orange;">8. Disclaimers and Limitation of Liability</h5>
    <p>The Website and its content are provided "as is" without warranties of any kind, either express or implied. The library does not warrant the accuracy, completeness, or reliability of the content. Users access and use the Website at their own risk. In no event shall the library be liable for any damages arising from the use or inability to use the Website.</p>
    <h5 style="color: orange;">9. Modifications to Terms</h5>
    <p>The library reserves the right to update or modify these Terms and Conditions at any time without prior notice. Users are encouraged to review these terms periodically for changes.</p>
    <h5 style="color: orange;">10. Contact Information</h5>
    <p>For questions or concerns regarding these Terms and Conditions, please contact us at [Contact Information].</p>  
      
  </div>
</div>

<script>
  function openUserTermsAndConditions() {
    document.getElementById("userTermsAndConditions").style.display = "block";
  }
  
  function closeUserTermsAndConditions() {
    document.getElementById("userTermsAndConditions").style.display = "none";
  }

</script>
</div>