<?php
$page_title = "Contact Us | Warp & Weft Tex";
$current_page = "contact";
include('includes/header.php');

$status_message = "";
$status_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name         = htmlspecialchars(trim($_POST['name']));
    $email        = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone        = htmlspecialchars(trim($_POST['phone']));
    $inquiry_type = htmlspecialchars(trim($_POST['inquiry_type']));
    $subject      = htmlspecialchars(trim($_POST['subject']));
    $message      = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message) && !empty($inquiry_type)) {
        
        // Dynamic Badge Colors for Admin Mail based on Category
        $badge_color = "#0284c7"; // Default Sky Blue
        if ($inquiry_type == "Sales / Quotation") $badge_color = "#16a34a"; // Green
        elseif ($inquiry_type == "Bulk Order Query") $badge_color = "#9333ea"; // Purple
        elseif ($inquiry_type == "Sample Development") $badge_color = "#ea580c"; // Orange

        // 1. ADMIN EMAIL SETUP
        $admin_email = "rafique@wwt-bd.com";
        $admin_subject = "[{$inquiry_type}] - " . $subject . " (From: {$name})";

        $admin_headers  = "MIME-Version: 1.0" . "\r\n";
        $admin_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $admin_headers .= "From: Warp & Weft Tex <noreply@wwt-bd.com>" . "\r\n";
        $admin_headers .= "Reply-To: " . $email . "\r\n";

        // Structured Admin Email Template
        $admin_body = "
        <html>
        <body style='font-family: Arial, sans-serif; background-color: #0f172a; padding: 25px; color: #334155;'>
            <div style='max-width: 650px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);'>
                
                <!-- Email Header Badge -->
                <div style='background-color: {$badge_color}; padding: 20px 25px; color: #ffffff;'>
                    <span style='background: rgba(255,255,255,0.2); padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;'>
                        {$inquiry_type}
                    </span>
                    <h2 style='margin: 10px 0 0 0; font-size: 22px; font-weight: bold;'>New Website Query Received</h2>
                </div>

                <!-- Structured Detail Table -->
                <div style='padding: 25px;'>
                    <table style='width: 100%; border-collapse: collapse; margin-bottom: 20px;'>
                        <tr style='border-bottom: 1px solid #e2e8f0;'>
                            <td style='padding: 10px 0; font-weight: bold; color: #64748b; width: 35%;'>Inquiry Category:</td>
                            <td style='padding: 10px 0; font-weight: bold; color: {$badge_color};'>{$inquiry_type}</td>
                        </tr>
                        <tr style='border-bottom: 1px solid #e2e8f0;'>
                            <td style='padding: 10px 0; font-weight: bold; color: #64748b;'>Client Name:</td>
                            <td style='padding: 10px 0; color: #0f172a;'>{$name}</td>
                        </tr>
                        <tr style='border-bottom: 1px solid #e2e8f0;'>
                            <td style='padding: 10px 0; font-weight: bold; color: #64748b;'>Email Address:</td>
                            <td style='padding: 10px 0;'><a href='mailto:{$email}' style='color: #0284c7; font-weight: bold;'>{$email}</a></td>
                        </tr>
                        <tr style='border-bottom: 1px solid #e2e8f0;'>
                            <td style='padding: 10px 0; font-weight: bold; color: #64748b;'>Phone / WhatsApp:</td>
                            <td style='padding: 10px 0; color: #0f172a;'>{$phone}</td>
                        </tr>
                        <tr style='border-bottom: 1px solid #e2e8f0;'>
                            <td style='padding: 10px 0; font-weight: bold; color: #64748b;'>Subject:</td>
                            <td style='padding: 10px 0; color: #0f172a; font-weight: 600;'>{$subject}</td>
                        </tr>
                    </table>

                    <!-- Message Body -->
                    <div style='margin-top: 15px;'>
                        <p style='font-weight: bold; color: #64748b; margin-bottom: 8px;'>Message / Requirement Specifications:</p>
                        <div style='background-color: #f8fafc; border-left: 4px solid {$badge_color}; padding: 15px; border-radius: 4px; color: #334155; line-height: 1.6; font-size: 14px;'>
                            " . nl2br($message) . "
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div style='background-color: #f1f5f9; padding: 12px 25px; text-align: center; font-size: 12px; color: #94a3b8;'>
                    Warp & Weft Tex Automated Contact Notification System
                </div>
            </div>
        </body>
        </html>
        ";

        // 2. USER AUTO-REPLY SETUP
        $user_subject = "Confirmation: We received your {$inquiry_type} query | Warp & Weft Tex";
        
        $user_headers  = "MIME-Version: 1.0" . "\r\n";
        $user_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $user_headers .= "From: Warp & Weft Tex <info@wwt-bd.com>" . "\r\n";

        $user_body = "
        <html>
        <body style='font-family: Arial, sans-serif; background-color: #07090e; color: #ffffff; padding: 25px;'>
            <div style='max-width: 600px; margin: 0 auto; background: #0f172a; border: 1px solid #1e293b; padding: 30px; border-radius: 12px;'>
                <h2 style='color: #38bdf8; margin-top: 0;'>Hello {$name},</h2>
                <p style='color: #cbd5e1; line-height: 1.6;'>
                    Thank you for reaching out to <strong>Warp & Weft Tex</strong>. We have received your inquiry under category: <strong style='color: #38bdf8;'>{$inquiry_type}</strong>.
                </p>
                <p style='color: #cbd5e1; line-height: 1.6;'>
                    Our relevant department team will review your specifications and contact you back shortly.
                </p>
                <div style='margin: 20px 0; padding: 15px; background: rgba(255,255,255,0.03); border-radius: 8px; border-left: 3px solid #38bdf8;'>
                    <p style='margin:0; font-size: 13px; color: #94a3b8;'><strong>Query Subject:</strong> {$subject}</p>
                </div>
                <hr style='border: 0; border-top: 1px solid #1e293b; margin: 20px 0;'>
                <p style='color: #64748b; font-size: 12px; margin: 0;'>
                    Warp & Weft Tex | Mirpur, Dhaka-1216, Bangladesh
                </p>
            </div>
        </body>
        </html>
        ";

        // Send Email Executions
        $mail_to_admin = @mail($admin_email, $admin_subject, $admin_body, $admin_headers);
        $mail_to_user  = @mail($email, $user_subject, $user_body, $user_headers);

        if ($mail_to_admin) {
            $status_type = "success";
            $status_message = "Your query has been submitted successfully! We have sent a confirmation copy to your email.";
        } else {
            $status_type = "error";
            $status_message = "Could not send your message. Please email us directly at rafique@wwt-bd.com";
        }

    } else {
        $status_type = "error";
        $status_message = "Please select an inquiry type and fill in all required fields.";
    }
}
?>

<main class="relative bg-[#07090e] text-slate-200 min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-sky-400 font-bold uppercase tracking-widest text-xs block mb-2">Get In Touch</span>
            <h1 class="text-4xl font-extrabold text-white">Contact & Query Request</h1>
            <p class="text-slate-400 mt-2 text-sm">Select your query type below so we can direct your request to the right team.</p>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="glass-card rounded-2xl p-8 border border-white/5">
                
                <?php if (!empty($status_message)): ?>
                    <div class="mb-6 p-4 rounded-xl text-sm font-semibold <?php echo ($status_type == 'success') ? 'bg-emerald-500/20 text-emerald-300 border border-emerald-500/30' : 'bg-rose-500/20 text-rose-300 border border-rose-500/30'; ?>">
                        <?php echo $status_message; ?>
                    </div>
                <?php endif; ?>

                <form action="contact.php" method="POST" class="space-y-5">
                    
                    <!-- Dropdown Category Selection -->
                    <div>
                        <label class="block text-xs font-semibold text-sky-400 uppercase tracking-wider mb-2">Select Inquiry Category *</label>
                        <select name="inquiry_type" required class="w-full bg-slate-900 border border-slate-700/80 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-sky-500 transition-colors">
                            <option value="" disabled selected>-- Select What You Need --</option>
                            <option value="Sales / Quotation">Sales / Price Quotation Request</option>
                            <option value="Bulk Order Query">Bulk Order Inquiry</option>
                            <option value="Sample Development">Sample Development Request</option>
                            <option value="Compliance & Certifications">Factory Compliance & Audit Query</option>
                            <option value="General Query">General Inquiry / Others</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Your Name *</label>
                            <input type="text" name="name" required class="w-full bg-slate-900 border border-slate-700/80 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-sky-500 transition-colors" placeholder="John Doe">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Your Email *</label>
                            <input type="email" name="email" required class="w-full bg-slate-900 border border-slate-700/80 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-sky-500 transition-colors" placeholder="name@company.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Phone / WhatsApp</label>
                            <input type="text" name="phone" class="w-full bg-slate-900 border border-slate-700/80 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-sky-500 transition-colors" placeholder="+880 1700-000000">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Subject *</label>
                            <input type="text" name="subject" required class="w-full bg-slate-900 border border-slate-700/80 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-sky-500 transition-colors" placeholder="e.g., T-Shirt Manufacturing Requirement">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Detailed Specification / Message *</label>
                        <textarea name="message" rows="5" required class="w-full bg-slate-900 border border-slate-700/80 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-sky-500 transition-colors resize-none" placeholder="Provide details like target GSM, order quantity, delivery terms, fabric requirements..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-semibold py-3.5 rounded-xl shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 hover:scale-[1.01] transition-all">
                        Submit Inquiry
                    </button>
                </form>

            </div>
        </div>

    </div>
</main>

<?php
include('includes/footer.php');
?>