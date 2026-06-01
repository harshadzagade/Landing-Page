                                                            <style>
    /* Scoped Typography & Base Container */
    .mca-page-container {
        color: #1e293b;
        max-width: 1200px;
        margin: 0 auto;
        padding: clamp(20px, 5vw, 40px) 20px;
        box-sizing: border-box;
        /* background: linear-gradient(180deg, #ffffff 0%, #fcfdfd 60%, #f8fafc 100%); */
    }

    .mca-page-container p {
        color: #475569;
        /* Elegant slate-gray */
        font-weight: 400 !important;
        /* Force regular weight */
        font-size: clamp(14.5px, 2.5vw, 16px);
        line-height: 1.75;
        margin-top: 0;
        margin-bottom: 24px;
    }

    .mca-page-container h4 {
        color: #0f172a;
        /* Dark slate */
        font-weight: 800;
        font-size: clamp(18px, 3vw, 22px);
        margin-top: 40px;
        margin-bottom: 18px;
        line-height: 1.35;
        position: relative;
    }

    .mca-page-container a {
        color: #E31E24;
        /* Brand Red */
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .mca-page-container a:hover {
        color: #b81116;
    }

    /* THE MET ADVANTAGE */
    .advantage-section {
        width: 100%;
        max-width: 900px;
        margin: 50px auto;
        padding: clamp(24px, 5vw, 45px);
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.02), 0 2px 10px rgba(0, 0, 0, 0.01);
        border: 1px solid rgba(227, 30, 36, 0.05);
        box-sizing: border-box;
    }

    .advantage-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(24px, 3.5vw, 30px);
        font-weight: 800;
        margin-top: 0;
        margin-bottom: clamp(30px, 4vw, 40px);
        letter-spacing: 0.5px;
        position: relative;
        display: inline-block;
        left: 50%;
        transform: translateX(-50%);
    }

    .advantage-section h2::after {
        content: "";
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 10px auto 0;
        border-radius: 10px;
    }

    .advantage-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .advantage-item {
        display: flex;
        align-items: center;
        gap: clamp(14px, 3vw, 20px);
        background: linear-gradient(135deg, #ffffff 0%, #fcfdfd 100%);
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: clamp(14px, 3vw, 18px);
        color: #334155;
        font-size: clamp(13.5px, 2.5vw, 15px);
        line-height: 1.5;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        box-sizing: border-box;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .advantage-item:hover {
        transform: translateY(-4px) scale(1.01);
        border-color: rgba(227, 30, 36, 0.25);
        box-shadow: 0 12px 25px rgba(227, 30, 36, 0.06);
    }

    .advantage-item i {
        flex: 0 0 44px;
        height: 44px;
        background: rgba(227, 30, 36, 0.06);
        color: #E31E24;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        border: 1px solid rgba(227, 30, 36, 0.12);
        box-shadow: 0 0 10px rgba(227, 30, 36, 0.03);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .advantage-item:hover i {
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        transform: scale(1.08) rotate(5deg);
        box-shadow: 0 5px 15px rgba(227, 30, 36, 0.2);
    }

    @media (max-width: 768px) {
        .advantage-list {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .advantage-section {
            padding: 24px 16px;
        }

        .advantage-item {
            align-items: flex-start;
        }

        .advantage-item i {
            margin-top: 2px;
        }
    }

    /* CURRICULUM STRUCTURE */
    .curriculum-section {
        padding: 60px 0;
        background: transparent;
    }

    .curriculum-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 40px;
        position: relative;
    }

    .curriculum-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 10px;
    }

    .curriculum-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    .sem-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        color: #334155;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }

    .sem-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 45px rgba(227, 30, 36, 0.09);
        border-color: rgba(227, 30, 36, 0.2);
    }

    .sem-head {
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 20px;
        font-weight: 800;
        font-size: 16px;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 12px rgba(227, 30, 36, 0.15);
    }

    .sem-head span {
        background: rgba(255, 255, 255, 0.2);
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 700;
    }

    .sem-card h4 {
        padding: 18px 20px 10px;
        margin: 0;
        color: #0f172a;
        font-size: 15px;
        font-style: italic;
        font-weight: 700;
        border-bottom: 1px solid #f1f5f9;
        letter-spacing: 0.2px;
    }

    .sem-card ul {
        list-style: none;
        padding: 0 20px 24px;
        margin: 0;
        flex-grow: 1;
    }

    .sem-card li {
        position: relative;
        padding: 12px 0 12px 18px;
        border-bottom: 1px solid #f1f5f9;
        font-size: 14px;
        line-height: 1.45;
        color: #475569;
        transition: all 0.25s ease;
    }

    .sem-card li:last-child {
        border-bottom: none;
    }

    .sem-card li:hover {
        padding-left: 22px;
        color: #0f172a;
    }

    .sem-card li::before {
        content: "";
        width: 6px;
        height: 6px;
        background: #E31E24;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 19px;
        transition: all 0.25s ease;
    }

    .sem-card li:hover::before {
        transform: scale(1.3);
        left: 4px;
        background: #b81116;
    }

    @media (max-width: 992px) {
        .curriculum-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }
    }

    @media (max-width: 576px) {
        .curriculum-grid {
            grid-template-columns: 1fr;
        }
    }

    /* TECHNICAL SKILLS & TECH STACK */
    .tech-section {
        padding: 60px 0;
        background: transparent;
    }

    .tech-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 40px;
        position: relative;
    }

    .tech-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 10px;
    }

    .tech-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 16px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .tech-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .tech-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 45px rgba(227, 30, 36, 0.09);
        border-color: rgba(227, 30, 36, 0.2);
    }

    .tech-card h3 {
        margin: 0;
        padding: 18px 12px;
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        text-align: center;
        font-size: 15px;
        font-weight: 800;
        line-height: 1.35;
        box-shadow: 0 4px 10px rgba(227, 30, 36, 0.1);
        /* Equal Height */
        min-height: 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: none;
    }

    .tech-card ul {
        list-style: none;
        padding: 18px 16px;
        margin: 0;
    }

    .tech-card li {
        position: relative;
        padding: 10px 0 10px 16px;
        color: #475569;
        font-size: 13.5px;
        line-height: 1.45;
        border-bottom: 1px solid #f1f5f9;
        transition: all 0.25s ease;
    }

    .tech-card li:last-child {
        border-bottom: none;
    }

    .tech-card li:hover {
        padding-left: 20px;
        color: #0f172a;
    }

    .tech-card li::before {
        content: "";
        width: 6px;
        height: 6px;
        background: #E31E24;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 16px;
        transition: all 0.25s ease;
    }

    .tech-card li:hover::before {
        transform: scale(1.3);
        left: 4px;
        background: #b81116;
    }

    .tools-bar {
        max-width: 1200px;
        margin: 30px auto 0;
        padding: 16px 28px;
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.1);
        border-radius: 40px;
        color: #475569;
        font-size: 14.5px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.02);
    }

    .tools-bar strong {
        color: #E31E24;
        margin-right: 12px;
        font-weight: 800;
    }

    .tools-bar span {
        margin: 0 6px;
        font-weight: 600;
    }

    @media (max-width: 1100px) {
        .tech-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
    }

    @media (max-width: 768px) {
        .tech-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 520px) {
        .tech-grid {
            grid-template-columns: 1fr;
        }

        .tools-bar {
            line-height: 2;
            border-radius: 20px;
            padding: 16px;
        }
    }

    /* TECH STACK & TOOLS GRID */
    .tech-tools-section {
        background: transparent;
        padding: 60px 0 0;
        overflow: hidden;
    }

    .tech-tools-container {
        max-width: 1200px;
        margin: auto;
    }

    .tech-tools-section h2 {
        text-align: center;
        color: #0f172a;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 8px;
        line-height: 1.2;
    }

    .title-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 14px;
        margin-bottom: 35px;
    }

    .title-dots::before,
    .title-dots::after {
        content: "";
        width: 90px;
        height: 2px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
    }

    .title-dots span {
        width: 8px;
        height: 8px;
        background: #0f172a;
        border-radius: 50%;
    }

    .tools-box {
        position: relative;
        border: 1px solid rgba(227, 30, 36, 0.1);
        border-radius: 24px;
        padding: 55px 0px 35px;
        background: #ffffff;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03), 0 2px 10px rgba(0, 0, 0, 0.01);
    }

    .tools-label {
        position: absolute;
        top: -22px;
        left: 30px;
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        padding: 10px 24px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 800;
        letter-spacing: 1px;
        box-shadow: 0 8px 25px rgba(227, 30, 36, 0.25);
    }

    .tools-grid {
        display: grid;
        grid-template-columns: repeat(10, 1fr);
    }

    .tool-item {
        min-height: 130px;
        min-width: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-right: 1px solid #f8fafc;
        text-align: center;
        padding: 18px 10px;
        box-sizing: border-box;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .tool-item:last-child {
        border-right: none;
    }

    .tool-item:hover {
        background: #fdfdfd;
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.02);
    }

    .tool-item i {
        font-size: 42px;
        color: #E31E24;
        margin-bottom: 12px;
        line-height: 1;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .tool-item:hover i {
        transform: translateY(-5px) scale(1.18) rotate(3deg);
        color: #E31E24;
        text-shadow: 0 8px 20px rgba(227, 30, 36, 0.25);
    }

    .tool-item p {
        margin: 0;
        font-size: 14.5px;
        font-weight: 700;
        color: #1e293b;
        line-height: 1.3;
        word-break: break-word;
        transition: all 0.3s ease;
    }

    .tool-item:hover p {
        color: #0f172a;
    }

    @media (max-width: 992px) {
        .tools-grid {
            grid-template-columns: repeat(5, 1fr);
        }

        .tool-item {
            border-right: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }

        .tool-item:nth-child(5n) {
            border-right: none;
        }

        .tool-item:nth-last-child(-n + 5) {
            border-bottom: none;
        }
    }

    @media (max-width: 576px) {
        .tech-tools-section {
            padding: 40px 0 0;
        }

        .tools-box {
            padding: 45px 15px 20px;
            margin: 0 10px;
        }

        .tools-label {
            left: 20px;
            top: -18px;
            font-size: 13px;
            padding: 8px 16px;
        }

        .title-dots::before,
        .title-dots::after {
            width: 45px;
        }

        .tools-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .tool-item {
            min-height: 110px;
            border-right: none !important;
            border-bottom: 1px solid #f1f5f9;
        }

        .tool-item:nth-last-child(-n + 2) {
            border-bottom: none;
        }

        .tool-item i {
            font-size: 36px;
        }

        .tool-item p {
            font-size: 13.5px;
        }
    }

    /* FEE STRUCTURE TABLE */
    .fee-table-wrap {
        width: 100%;
        overflow-x: auto;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        margin: 30px 0;
        background: #ffffff;
    }

    .fee-table {
        width: 100%;
        border-collapse: collapse;
    }

    .fee-table th,
    .fee-table td {
        padding: 16px 20px;
        text-align: center;
        font-size: 14.5px;
    }

    .fee-table th {
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        font-weight: 700;
        letter-spacing: 0.5px;
        border: none;
        box-shadow: 0 4px 10px rgba(227, 30, 36, 0.1);
    }

    .fee-table td {
        border-bottom: 1px solid #f1f5f9;
        color: #475569;
    }

    .fee-table tbody tr:last-child td {
        border-bottom: none;
    }

    .fee-table tbody tr {
        transition: all 0.2s ease;
    }

    .fee-table tbody tr:hover {
        background-color: rgba(227, 30, 36, 0.02);
    }

    @media (max-width: 768px) {
        .fee-table-wrap {
            border: none;
            box-shadow: none;
            background: transparent;
        }

        .fee-table thead {
            display: none;
        }

        .fee-table,
        .fee-table tbody,
        .fee-table tr,
        .fee-table td {
            display: block;
            width: 100%;
        }

        .fee-table tr {
            margin-bottom: 16px;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            overflow: hidden;
        }

        .fee-table td {
            text-align: right;
            padding-left: 45%;
            position: relative;
            box-sizing: border-box;
            border-bottom: 1px solid #f1f5f9;
            font-size: 13.5px;
        }

        .fee-table td:last-child {
            border-bottom: none;
        }

        .fee-table td::before {
            content: attr(data-label);
            position: absolute;
            left: 16px;
            width: 40%;
            text-align: left;
            font-weight: 700;
            color: #E31E24;
        }
    }

    /* DETAILS ACCORDIONS */
    .info-interactive-section {
        padding: 60px 0;
        background: transparent;
    }

    .info-interactive-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 30px;
        position: relative;
    }

    .info-interactive-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 20px;
    }

    .info-accordion {
        max-width: 1000px;
        margin: 0 auto;
    }

    .info-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-left: 4px solid #E31E24;
        /* Left red highlight */
        border-radius: 14px;
        margin-bottom: 16px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .info-card:hover {
        box-shadow: 0 12px 30px rgba(227, 30, 36, 0.07);
        border-color: rgba(227, 30, 36, 0.2);
    }

    .info-card summary {
        cursor: pointer;
        list-style: none;
        background: #ffffff;
        color: #0f172a;
        padding: 20px 24px;
        font-size: 17px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 14px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .info-card summary::-webkit-details-marker {
        display: none;
    }

    .info-card summary i {
        color: #ffffff;
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 14px;
        box-shadow: 0 4px 10px rgba(227, 30, 36, 0.2);
    }

    .info-card summary::after {
        content: "+";
        margin-left: auto;
        font-size: 22px;
        color: #E31E24;
        background: rgba(227, 30, 36, 0.05);
        width: 30px;
        height: 30px;
        border-radius: 50%;
        text-align: center;
        line-height: 28px;
        font-weight: 700;
        flex-shrink: 0;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .info-card summary:hover {
        background: #fafbfc;
    }

    .info-card[open] summary {
        border-bottom: 1px solid #f1f5f9;
        background: #fffafa;
    }

    .info-card[open] summary::after {
        content: "-";
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        transform: rotate(180deg);
        box-shadow: 0 4px 10px rgba(227, 30, 36, 0.2);
    }

    .info-content {
        padding: 24px;
        background: #ffffff;
        color: #475569;
        font-size: 15px;
        line-height: 1.75;
    }

    .info-content p {
        margin: 0 0 12px;
    }

    .info-content p:last-child {
        margin-bottom: 0;
    }

    .info-content a {
        color: #E31E24;
        font-weight: 700;
        text-decoration: none;
    }

    .info-content a:hover {
        text-decoration: underline;
    }

    .info-content ul {
        margin: 10px 0 15px;
        padding-left: 20px;
    }

    .info-content li {
        margin-bottom: 8px;
        color: #475569;
    }

    .formula-box {
        background: #f8fafc;
        border-left: 4px solid #E31E24;
        padding: 18px;
        border-radius: 8px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 18px;
        font-size: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.01);
    }

    .formula-box span {
        display: block;
        margin-top: 8px;
        color: #E31E24;
        font-size: 18px;
    }

    .example-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 20px;
        border-radius: 10px;
    }

    @media (max-width: 576px) {
        .info-interactive-section {
            padding: 40px 10px;
        }

        .info-card summary {
            font-size: 15px;
            padding: 16px;
            gap: 10px;
        }

        .info-card summary i {
            width: 30px;
            height: 30px;
            font-size: 13px;
        }

        .info-card summary::after {
            width: 26px;
            height: 26px;
            font-size: 18px;
            line-height: 24px;
        }

        .info-content {
            padding: 16px;
            font-size: 14px;
        }
    }

    /* PROGRAMME OUTLINE */
    .programme-outline {
        padding: 60px 0;
        background: transparent;
    }

    .programme-outline h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
    }

    .programme-outline h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 20px;
    }

    .outline-subtitle {
        max-width: 800px;
        margin: 20px auto 40px;
        text-align: center;
        color: #475569;
        line-height: 1.7;
        font-size: 16px;
    }

    .outline-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .outline-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 16px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .outline-card:hover {
        transform: translateY(-8px) scale(1.02);
        border-color: rgba(227, 30, 36, 0.2);
        box-shadow: 0 20px 45px rgba(227, 30, 36, 0.08);
    }

    .outline-icon {
        width: 60px;
        height: 60px;
        background: rgba(227, 30, 36, 0.07);
        color: #E31E24;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        border: 1px solid rgba(227, 30, 36, 0.12);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .outline-card:hover .outline-icon {
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        transform: scale(1.08) rotate(3deg);
        box-shadow: 0 8px 20px rgba(227, 30, 36, 0.2);
    }

    .outline-card h3 {
        color: #0f172a;
        font-size: 20px;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .outline-card p {
        color: #475569;
        line-height: 1.7;
        margin: 0;
    }

    @media (max-width: 768px) {
        .outline-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .outline-card {
            padding: 24px 20px;
        }

        .outline-card h3 {
            font-size: 18px;
        }

        .outline-subtitle {
            font-size: 14.5px;
        }
    }

    /* PROGRAMME CONTENT */
    .programme-content-section {
        padding: 60px 0;
        background: transparent;
    }

    .programme-content-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 30px;
        position: relative;
    }

    .programme-content-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 20px;
    }

    .programme-accordion {
        max-width: 1000px;
        margin: 0 auto;
    }

    .semester-card {
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-left: 4px solid #E31E24;
        border-radius: 14px;
        margin-bottom: 16px;
        overflow: hidden;
        background: #ffffff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .semester-card:hover {
        box-shadow: 0 12px 30px rgba(227, 30, 36, 0.07);
        border-color: rgba(227, 30, 36, 0.2);
    }

    .semester-card summary {
        list-style: none;
        cursor: pointer;
        background: #ffffff;
        color: #0f172a;
        padding: 20px 24px;
        font-size: 17px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 14px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .semester-card summary::-webkit-details-marker {
        display: none;
    }

    .semester-card summary i {
        width: 34px;
        height: 34px;
        background: rgba(227, 30, 36, 0.07);
        color: #E31E24;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 14px;
        border: 1px solid rgba(227, 30, 36, 0.1);
    }

    .semester-card summary::after {
        content: "+";
        margin-left: auto;
        width: 30px;
        height: 30px;
        background: rgba(227, 30, 36, 0.05);
        color: #E31E24;
        border-radius: 50%;
        text-align: center;
        line-height: 28px;
        font-size: 22px;
        font-weight: 700;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .semester-card summary:hover {
        background: #fafbfc;
    }

    .semester-card[open] summary {
        border-bottom: 1px solid #f1f5f9;
        background: #fffafa;
    }

    .semester-card[open] summary::after {
        content: "-";
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        transform: rotate(180deg);
        box-shadow: 0 4px 10px rgba(227, 30, 36, 0.2);
    }

    .semester-body {
        padding: 24px;
    }

    .semester-body ul {
        margin: 0;
        padding-left: 20px;
        columns: 2;
        column-gap: 40px;
    }

    .semester-body li {
        break-inside: avoid;
        margin-bottom: 12px;
        color: #475569;
        line-height: 1.6;
    }

    .semester-body li::marker {
        color: #E31E24;
    }

    .semester-body ul ul {
        columns: 1;
        margin-top: 8px;
        padding-left: 18px;
    }

    /* ADMISSIONS ACTIONS & HELPLINES */
    .admission-actions {
        max-width: 1000px;
        margin: 45px auto;
        display: flex;
        gap: 24px;
        align-items: stretch;
    }

    .helpline-box,
    .vacant-seat-btn {
        flex: 1;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 16px;
        padding: 24px;
        background: #ffffff;
        display: flex;
        align-items: center;
        gap: 20px;
        text-decoration: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .helpline-box:hover,
    .vacant-seat-btn:hover {
        transform: translateY(-5px);
        border-color: rgba(227, 30, 36, 0.2);
        box-shadow: 0 20px 45px rgba(227, 30, 36, 0.08);
    }

    .helpline-box>i,
    .vacant-seat-btn i {
        width: 50px;
        height: 50px;
        background: rgba(227, 30, 36, 0.07);
        color: #E31E24;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        border: 1px solid rgba(227, 30, 36, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .helpline-box:hover>i,
    .vacant-seat-btn:hover i {
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        transform: scale(1.08) rotate(5deg);
        box-shadow: 0 5px 15px rgba(227, 30, 36, 0.2);
    }

    .helpline-box h3 {
        margin: 0 0 6px;
        color: #0f172a;
        font-size: 18px;
        font-weight: 800;
    }

    .helpline-box p {
        margin: 0;
        color: #475569;
        font-size: 15px;
    }

    .helpline-box a {
        color: #E31E24;
        font-weight: 700;
        text-decoration: none;
    }

    .vacant-seat-btn {
        color: #E31E24;
        border-color: rgba(227, 30, 36, 0.08);
        font-weight: 800;
        font-size: 17px;
        justify-content: flex-start;
    }

    .location-box {
        max-width: 1000px;
        margin: 50px auto 0;
    }

    .location-box h2 {
        text-align: center;
        color: #0f172a;
        font-size: clamp(20px, 3vw, 24px);
        font-weight: 800;
        margin-bottom: 24px;
    }

    .map-wrap {
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.05);
    }

    @media (max-width: 768px) {
        .semester-body ul {
            columns: 1;
        }

        .admission-actions {
            flex-direction: column;
            gap: 16px;
        }

        .semester-card summary {
            font-size: 15px;
            padding: 16px;
        }

        .semester-card summary i {
            width: 32px;
            height: 32px;
        }

        .semester-body {
            padding: 18px;
        }
    }

    /* ==========================================================================
       ALUMNI SPEAK SECTION
       ========================================================================== */
    .alumni-section {
        padding: 60px 0;
        background: transparent;
    }

    .alumni-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 40px;
        position: relative;
    }

    .alumni-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 10px;
    }

    .alumni-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .alumni-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .alumni-card:hover {
        transform: translateY(-8px);
        border-color: rgba(227, 30, 36, 0.2);
        box-shadow: 0 20px 45px rgba(227, 30, 36, 0.08);
    }

    .alumni-card::before {
        content: "-";
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 80px;
        color: rgba(227, 30, 36, 0.08);
        font-family: serif;
        line-height: 1;
    }

    .alumni-info {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .alumni-img {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #ffffff;
        box-shadow: 0 5px 15px rgba(227, 30, 36, 0.15);
    }

    .alumni-meta h3 {
        margin: 0;
        font-size: 18px;
        font-weight: 800;
        color: #0f172a;
    }

    .alumni-meta p {
        margin: 4px 0 0 !important;
        font-size: 14px;
        color: #E31E24 !important;
        font-weight: 700 !important;
    }

    .alumni-text {
        font-size: 15px;
        line-height: 1.7;
        color: #475569;
        margin: 0;
        flex-grow: 1;
    }

    .alumni-text p {
        margin-bottom: 16px !important;
    }

    .alumni-text p:last-child {
        margin-bottom: 0 !important;
    }

    /* ==========================================================================
       ADMISSION PROCESS SECTION
       ========================================================================== */
    .admissions-process-section {
        padding: 60px 0;
        background: transparent;
    }

    .admissions-process-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 30px;
        position: relative;
    }

    .admissions-process-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 10px;
    }

    .admission-flow-wrap {
        width: 100%;
        overflow-x: auto;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 16px;
        margin: 30px 0 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        background: #ffffff;
    }

    .admission-flow-img {
        display: block;
        width: 100%;
        min-width: 800px;
        height: auto;
    }

    /* ==========================================================================
       DOCUMENTS & TIPS SECTION
       ========================================================================== */
    .admission-details-section {
        padding: 60px 0;
        background: transparent;
    }

    .admission-details-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .docs-card,
    .tips-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
    }

    .docs-card h3,
    .tips-card h3 {
        color: #0f172a;
        font-size: 22px;
        font-weight: 800;
        margin-top: 0;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .docs-card h3 i,
    .tips-card h3 i {
        color: #E31E24;
        font-size: 20px;
    }

    .docs-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .docs-list li {
        position: relative;
        padding: 12px 0 12px 28px;
        border-bottom: 1px solid #f1f5f9;
        font-size: 14.5px;
        line-height: 1.5;
        color: #475569;
    }

    .docs-list li:last-child {
        border-bottom: none;
    }

    .docs-list li::before {
        content: "\f00c";
        /* FontAwesome check icon */

        color: #E31E24;
        position: absolute;
        left: 0;
        top: 13px;
        font-size: 14px;
        font-weight: 900;
    }

    .docs-list li strong {
        color: #0f172a;
    }

    .tips-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .tips-list li {
        position: relative;
        padding: 12px 14px 12px 35px;
        background: #fffcfc;
        border-left: 3px solid #E31E24;
        border-radius: 0 8px 8px 0;
        margin-bottom: 12px;
        font-size: 14px;
        line-height: 1.5;
        color: #475569;
    }

    .tips-list li:last-child {
        margin-bottom: 0;
    }

    .tips-list li::before {
        content: "\f0eb";
        /* FontAwesome lightbulb icon */

        color: #E31E24;
        position: absolute;
        left: 12px;
        top: 13px;
        font-size: 14px;
        font-weight: 900;
    }

    @media (max-width: 992px) {
        .alumni-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .admission-details-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
    }


    /* ==========================================================================
       FAQ SECTION
       ========================================================================== */
    .faq-section {
        padding: 60px 0;
        background: transparent;
    }

    .faq-section h2 {
        text-align: center;
        color: #E31E24;
        font-size: clamp(26px, 4vw, 38px);
        font-weight: 800;
        margin-bottom: 40px;
        position: relative;
    }

    .faq-section h2::after {
        content: "";
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #E31E24, #ff4b51);
        display: block;
        margin: 12px auto 0;
        border-radius: 10px;
    }

    .faq-accordion {
        max-width: 1000px;
        margin: 0 auto;
    }

    .faq-card {
        background: #ffffff;
        border: 1px solid rgba(227, 30, 36, 0.08);
        border-left: 4px solid #E31E24;
        border-radius: 14px;
        margin-bottom: 16px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-card:hover {
        box-shadow: 0 12px 30px rgba(227, 30, 36, 0.07);
        border-color: rgba(227, 30, 36, 0.2);
    }

    .faq-card summary {
        cursor: pointer;
        list-style: none;
        background: #ffffff;
        color: #0f172a;
        padding: 18px 24px;
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 14px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-card summary::-webkit-details-marker {
        display: none;
    }

    .faq-card summary::after {
        content: "+";
        margin-left: auto;
        font-size: 20px;
        color: #E31E24;
        background: rgba(227, 30, 36, 0.05);
        width: 28px;
        height: 28px;
        border-radius: 50%;
        text-align: center;
        line-height: 26px;
        font-weight: 700;
        flex-shrink: 0;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-card summary:hover {
        background: #fafbfc;
    }

    .faq-card[open] summary {
        border-bottom: 1px solid #f1f5f9;
        background: #fffafa;
        color: #E31E24;
    }

    .faq-card[open] summary::after {
        content: "-";
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff;
        transform: rotate(180deg);
        box-shadow: 0 4px 10px rgba(227, 30, 36, 0.2);
    }

    .faq-content {
        padding: 24px;
        background: #ffffff;
        color: #475569;
        font-size: 15px;
        line-height: 1.7;
    }

    .faq-content ul {
        margin: 12px 0 0;
        padding-left: 20px;
    }

    .faq-content li {
        margin-bottom: 8px;
        color: #475569;
    }

    .faq-content li::marker {
        color: #E31E24;
    }

    .faq-apply-btn {
        display: inline-block;
        margin-top: 15px;
        padding: 12px 24px;
        background: linear-gradient(135deg, #E31E24 0%, #b81116 100%);
        color: #ffffff !important;
        font-weight: 700 !important;
        text-decoration: none;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(227, 30, 36, 0.2);
        transition: all 0.3s ease;
    }

    .faq-apply-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(227, 30, 36, 0.35);
        text-decoration: none !important;
    }

    @media (max-width: 576px) {
        .faq-card summary {
            font-size: 14.5px;
            padding: 16px;
        }

        .faq-content {
            padding: 16px;
            font-size: 14px;
        }
    }
</style>
<div class="mca-page-container">

    <p><b>For admissions call
            <a href="tel:+91 7208006689">+91 7208006689</a> /
            <a href="tel:+91 8390800392">+91 8390800392</a>
        </b>
    </p>
    <h4><b><i>Two-year, full-time PG programme affiliated to Mumbai University &amp; <br>approved by the Directorate of
                Technical Education (DTE),<br>All India Council for Technical Education (AICTE) &amp; NAAC (Grade A)
            </i>
        </b>
    </h4>

    <h4>About the Programme</h4>
    <p>Master of Computer Application from MET Institute of Computer Science (MET ICS), recognized as one of the top
        institutes in India, is a 2 years (4 Semesters) post graduate programme . It is designed to provide a blend of
        skills required across areas ranging from software development to enterprise level applications. The programme
        follows outcome based education approach aligned with NEP2020.
    </p>
    <p>The MCA programme adopts a project based learning approach to inculcate advanced skills required in the ever
        changing dynamic world of IT. In alignment with the OBE framework Program Educational Objectives (PEOs), Program
        Outcomes, course outcomes are defined to strengthen teaching learning process. The MCA programme is structured
        across four semesters, progressing from Foundation &amp; Core concepts to Applied &amp; Intelligent Systems,
        followed by
        Advanced &amp; Specialisation domains, and culminating in Industry Internship and Capstone projects. This steady
        progression ensures that students develop strong theoretical foundations, practical expertise, research
        aptitude, and industry experience. Institute Social Responsibility is included in the programme to create social
        awareness, values and responsible behaviour among the learners. The curriculum incorporates courses such as
        Artificial Intelligence, Machine Learning, Data Science, Quantum Computing, IoT, and Blockchain to keep learners
        allied with growing industry trends. A dedicated course on communication and soft skills further enhances
        students’ professional and interpersonal abilities. Guided by experienced faculty and supported by world-class
        infrastructure at MET Institute of Computer Science, the programme equips learners with strong employability
        skills and prepares them to become competent global IT professionals.
    </p>
    <p>In addition to academics, several unique initiatives such as the mentoring system, seminars, workshops, guest
        lectures, quizzes, the technical magazine The Edge, and the annual technical festival Tech@MET are organized to
        encourage innovation, leadership, teamwork, and the overall personality development of students.
    </p>

    <section class="advantage-section">
        <h2>THE MET ADVANTAGE</h2>

        <div class="advantage-list">
            <div class="advantage-item">
                <i class="fa fa-graduation-cap"></i>
                <span>100% Enrolment ratio for MCA 2 Years Programme</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-trophy"></i>
                <span>Five University Toppers</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-briefcase"></i>
                <span>Excellent Industry tie-ups and 100 percent internships</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-money"></i>
                <span>Financial Assistance, Free ship &amp; Scholarships</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-university"></i>
                <span>25 Years of Academic Excellence</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-trophy"></i>
                <span>Amongst Top 5 MCA Institutes in Mumbai</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-book"></i>
                <span>Value Added Courses</span>
            </div>

            <div class="advantage-item">
                <i class="fa fa-flask"></i>
                <span>Excellent Research</span>
            </div>
        </div>
    </section>

    <h4>Are you eligible?</h4>
    <p>Graduate from a recognised University with Mathematics or Statistics as one of the subjects at 10+2 level or at
        graduation and minimum of 50% aggregate marks for open category and 45% for reserved category.
    </p>

    <h4>Sanctioned Intake - 60 + TFWS (3) + EWS(6)</h4>

    <h4>Selection Procedure</h4>
    <p>The students will have to appear for the state-level Common Entrance Test (CET) conducted by Directorate of
        Technical Education (DTE), Mumbai. The applicants will have to submit CET scores.
    </p>

    <h4>Fee Structure</h4>

    <ul>
        <li>Fees for the academic year 2026-27 is Rs. 1,95,000/- as per the Fees Regulatory Authority, Government of
            Maharashtra. (Minutes dated 05th May 2026)</li>
        <img src="https://www.met.edu/uploadfile/images/Marathi_font_ICS.png" alt="Marathi font" width="900" height="900">

        <li>Document Retention is as per the directives received from the governing bodies from time to time.</li>
        <li>Reservation and Admission Policy is as per the rules and regulations of Government of Maharashtra /
            Directorate of Technical Education.</li>
    </ul>

    <p></p>
    <div class="fee-table-wrap">
        <table class="fee-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Tuition Fees<br>(Amount in Rs.)</th>
                    <th>Development Fees<br>(Amount in Rs.)</th>
                    <th>Other Fees<br>(Amount in Rs.)</th>
                    <th>Total Fees Payable<br>(Amount in Rs.)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Category">Open</td>
                    <td data-label="Tuition Fees">Rs. 1,69,565/-</td>
                    <td data-label="Development Fees">Rs. 25,435/-</td>
                    <td data-label="Other Fees">Rs. 10,119/-</td>
                    <td data-label="Total Fees Payable">Rs. 2,05,119/-</td>
                </tr>
                <tr>
                    <td data-label="Category">SC/ST</td>
                    <td data-label="Tuition Fees">NA</td>
                    <td data-label="Development Fees">NA</td>
                    <td data-label="Other Fees">Rs. 10,119/-</td>
                    <td data-label="Total Fees Payable">Rs. 10,119/-</td>
                </tr>
                <tr>
                    <td data-label="Category">VJNT/DT/SBC/TFWS</td>
                    <td data-label="Tuition Fees">NA</td>
                    <td data-label="Development Fees">Rs. 25,435/-</td>
                    <td data-label="Other Fees">Rs. 10,119/-</td>
                    <td data-label="Total Fees Payable">Rs. 35,554/-</td>
                </tr>
                <tr>
                    <td data-label="Category">OBC/SEBC/EWS (MALE)</td>
                    <td data-label="Tuition Fees">Rs. 84,782.5/-</td>
                    <td data-label="Development Fees">Rs. 25,435/-</td>
                    <td data-label="Other Fees">Rs. 10,119/-</td>
                    <td data-label="Total Fees Payable">Rs. 1,20,336.5/-</td>
                </tr>
                <tr>
                    <td data-label="Category">OBC/SEBC/EWS (FEMALE)</td>
                    <td data-label="Tuition Fees">NA</td>
                    <td data-label="Development Fees">Rs. 25,435/-</td>
                    <td data-label="Other Fees">Rs. 10,119/-</td>
                    <td data-label="Total Fees Payable">Rs. 35,554/-</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p></p>


    <section class="tech-section">
        <h2>TECHNICAL SKILLS &amp; TECH STACK</h2>

        <div class="tech-grid">
            <div class="tech-card">
                <h3>Core<br>Programming</h3>
                <ul>
                    <li>Advanced Java (J2EE)</li>
                    <li>Python &amp; R</li>
                    <li>Data Structures &amp; Algorithms</li>
                    <li>Software Engineering</li>
                </ul>
            </div>

            <div class="tech-card">
                <h3>Full-Stack &amp;<br>Mobile</h3>
                <ul>
                    <li>MERN / MEAN Stack</li>
                    <li>Advanced Web Tech (AWT)</li>
                    <li>Android &amp; Flutter</li>
                    <li>REST APIs &amp; DevOps</li>
                </ul>
            </div>

            <div class="tech-card">
                <h3>AI / ML / Data</h3>
                <ul>
                    <li>Machine Learning &amp; AI</li>
                    <li>Deep Learning &amp; CV</li>
                    <li>Big Data Analytics</li>
                    <li>NLP &amp; Data Visualization</li>
                </ul>
            </div>

            <div class="tech-card">
                <h3>Cloud &amp; Infra</h3>
                <ul>
                    <li>AWS &amp; Azure Cloud</li>
                    <li>Cloud Computing</li>
                    <li>Computer Networks</li>
                    <li>Distributed Systems</li>
                </ul>
            </div>

            <div class="tech-card">
                <h3>Security &amp;<br>Emerging</h3>
                <ul>
                    <li>Information Security</li>
                    <li>Ethical Hacking</li>
                    <li>Blockchain</li>
                    <li>IoT &amp; RPA</li>
                </ul>
            </div>
        </div>

        <div class="tools-bar">
            <strong>Tools &amp; Platforms:</strong>
            <span>Python</span> ·
            <span>Java</span> ·
            <span>SQL</span> ·
            <span>NoSQL</span> ·
            <span>Git</span> ·
            <span>Docker</span> ·
            <span>Jira</span> ·
            <span>AWS</span> ·
            <span>Azure</span> ·
            <span>TensorFlow</span>
        </div>
    </section>

    <section class="tech-tools-section">
        <div class="tech-tools-container">
            <h2>TECH STACK &amp; TOOLS</h2>

            <div class="title-dots"><span></span><span></span><span></span></div>

            <div class="tools-box">
                <div class="tools-label">TOOLS &amp; PLATFORMS</div>

                <div class="tools-grid">
                    <div class="tool-item"><i class="fa fa-code"></i>
                        <p>Python</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-coffee"></i>
                        <p>Java</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-database"></i>
                        <p>SQL</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-leaf"></i>
                        <p>NoSQL</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-git"></i>
                        <p>Git</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-cubes"></i>
                        <p>Docker</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-tasks"></i>
                        <p>Jira</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-cloud"></i>
                        <p>AWS</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-windows"></i>
                        <p>Azure</p>
                    </div>
                    <div class="tool-item"><i class="fa fa-sitemap"></i>
                        <p>TensorFlow</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="info-interactive-section">

        <div class="info-accordion">

            <details class="info-card" open="">
                <summary><i class="fa fa-globe"></i> For NRI Students</summary>
                <div class="info-content">
                    <p>
                        NRI students can take admission to the MCA programme by registering through the
                        <a href="https://cetcell.mahacet.org/" target="_blank">MAH CET Cell Portal</a>.
                    </p>
                    <p>
                        NRI students are not required to appear for the MAH MCA CET examination and can directly secure
                        admission by submitting the online choice filling form as per the admission process.
                    </p>
                </div>
            </details>

            <details class="info-card">
                <summary><i class="fa fa-briefcase"></i> Placements</summary>
                <div class="info-content">
                    <p>MET MCA alumni are making us proud across the globe by excelling in diverse industries including
                        IT, finance, healthcare, e-commerce, consulting, and start-ups. Our graduates work in leading
                        companies in roles such as Software Developer, Data Scientist, AI/ML Engineer, Full Stack
                        Developer, Cloud Engineer, Cybersecurity Analyst, and Business Analyst. Many reputed
                        organizations visit the campus every year for recruitment, offering excellent career
                        opportunities and attractive salary packages. Several MCA graduates also pursue entrepreneurship
                        by launching innovative technology start-ups and digital ventures
                    </p>
                </div>
            </details>

            <details class="info-card">
                <summary><i class="fa fa-question-circle"></i> What if you have missed MAH MCA CET?</summary>
                <div class="info-content">
                    <p>At MET Institute of Computer Science, experiential learning forms an integral part of the
                        academic ecosystem, helping students connect theoretical concepts with real-world applications.
                        The institute regularly conducts guest lectures, industry interaction sessions, workshops,
                        bootcamps, industrial visits, hackathons, live projects, and activity-based learning initiatives
                        to enhance practical knowledge and professional readiness.
                    </p>
                    <p>Through continuous engagement with industry experts, alumni, and technology professionals,
                        students gain hands-on exposure to emerging technologies, current industry practices, teamwork,
                        innovation, and problem-solving approaches. These experiential learning opportunities prepare
                        students to become industry-ready professionals equipped with both technical expertise and
                        practical skills required in the evolving IT and technology sector.
                    </p>
                </div>
            </details>

            <details class="info-card">
                <summary><i class="fa fa-calculator"></i> How is MCA CET Percentile Calculated?</summary>
                <div class="info-content">
                    <p>The basic formula is:</p>
                    <img src="https://www.met.edu/uploadfile/images/MCA Formula.png" alt="Marathi font" width="900" height="900">

                    <div class="example-box">
                        <p><strong>Suppose:</strong></p>
                        <p>Total students = 10,000</p>
                        <p>Students scoring less than or equal to you = 9,200</p>
                        <p><strong>Then:</strong></p>
                        <img src="https://www.met.edu/uploadfile/images/MCA Formula1.png" alt="Marathi font" width="400" height="900">
                    </div>
                </div>
            </details>

        </div>
    </section>

    <section class="programme-outline">
        <h2>Programme Outline</h2>
        <p class="outline-subtitle">
            The MCA programme has the following approach:
        </p>

        <div class="outline-grid">

            <div class="outline-card">
                <div class="outline-icon">
                    <i class="fa fa-code"></i>
                </div>
                <h3>Strong Technical Foundation</h3>
                <p>
                    Core subjects in Programming, Mathematics field. Project based learning approach is used.
                </p>
            </div>

            <div class="outline-card">
                <div class="outline-icon">
                    <i class="fa fa-lightbulb-o"></i>
                </div>
                <h3>Future-Ready Electives</h3>
                <p>
                    Electives like IoT, Blockchain, Game Development, Robotic Process Automation, Computer Vision,
                    Embedded Systems, Image Processing, Natural Language Processing, Geographic Information System,
                    Design and Analysis of Algorithm, Digital Marketing and Business Analytics, Ethical Hacking, Quantum
                    Computing to keep them in touch with the latest in the computing world.
                </p>
            </div>

            <div class="outline-card">
                <div class="outline-icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <h3>Industry Internship</h3>
                <p>
                    The final semester internship project in the industry prepares our students for the rigour of the
                    corporate world. The students pursue a six month live project in the industry. Thus, when the
                    students step into the corporate world they are fully equipped with the best IT skills.
                </p>
            </div>

            <div class="outline-card">
                <div class="outline-icon">
                    <i class="fa fa-users"></i>
                </div>
                <h3>Holistic Development</h3>
                <p>
                    Unique initiatives and activities like the mentoring system, seminars and workshops, guest lectures,
                    Quiz, technical magazine ‘The Edge’ and technical festival 'Tech@MET' are arranged in order to
                    enhance an all-round growth of each individual student.
                </p>
            </div>

        </div>
    </section>

    <br>

    <section class="curriculum-section">
        <h2>Curriculum Structure</h2>

        <div class="curriculum-grid">
            <div class="sem-card">
                <div class="sem-head">
                    <span>SEM I</span>
                </div>
                <h4>Foundation &amp; Core</h4>
                <ul>
                    <li>Mathematical Foundations for CS</li>
                    <li>Advanced Java</li>
                    <li>Adv. Database Mgmt System</li>
                    <li>Software Project Management</li>
                    <li>Data Structures Lab / Java Lab</li>
                    <li>Elective: E-Commerce / Digital Mktg</li>
                </ul>
            </div>

            <div class="sem-card">
                <div class="sem-head">
                    <span>SEM II</span>
                </div>
                <h4>Applied &amp; Intelligent Systems</h4>
                <ul>
                    <li>Research Methodology</li>
                    <li>AI &amp; Machine Learning</li>
                    <li>Information Security</li>
                    <li>Soft Skills Development</li>
                    <li>DevOps Lab / JWT Lab</li>
                    <li>Elective: IoT / NLP / Cyber Sec / RPA</li>
                </ul>
            </div>

            <div class="sem-card">
                <div class="sem-head">
                    <span>SEM III</span>
                </div>
                <h4>Advanced &amp; Specialization</h4>
                <ul>
                    <li>Big Data Analytics &amp; Visualisation</li>
                    <li>Mobile Computing Lab</li>
                    <li>Research Project (RP)</li>
                    <li>Field Project (FP) / IIA</li>
                    <li>Elective: CV / Deep Learning / Cloud</li>
                    <li>Elective: Ethical Hacking / Blockchain</li>
                </ul>
            </div>

            <div class="sem-card">
                <div class="sem-head">
                    <span>SEM IV</span>
                </div>
                <h4>Industry Internship</h4>
                <ul>
                    <li>On-the-Job Training (OJT)</li>
                    <li>e-Internship / Industry Internship</li>
                    <li>Full Software System Development</li>
                    <li>Research Project Continuation</li>
                    <li>Capstone Deliverable</li>
                    <li>Industry Mentor Assigned</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="programme-content-section">
        <h2>MCA Programme Structure</h2>

        <div class="programme-accordion">

            <details class="semester-card" open="">
                <summary><i class="fa fa-book"></i> Semester I</summary>
                <div class="semester-body">
                    <ul>
                        <li>MCA11 Mathematical Foundation for Computer Science</li>
                        <li>MCA12 Advanced Java</li>
                        <li>MCA13 Advanced Database Management System</li>
                        <li>MCA14 Software Project Management</li>
                        <li>MCAE15 Elective – 1
                            <ul>
                                <li>Accounting &amp; Managerial Economics</li>
                                <li>Optimization Techniques</li>
                                <li>Digital Marketing and Business Analytics</li>
                                <li>e-Commerce</li>
                            </ul>
                        </li>
                        <li>MCAL11 Advanced Data Structures Lab</li>
                        <li>MCAL12 Advanced Java Lab</li>
                        <li>MCAL13 Advanced Database Management System Lab</li>
                        <li>MCAL14 Web Technologies Lab</li>
                        <li>MCAP11 Mini Project – 1A</li>
                    </ul>
                </div>
            </details>

            <details class="semester-card">
                <summary><i class="fa fa-laptop"></i> Semester II</summary>
                <div class="semester-body">
                    <ul>
                        <li>MCA21 Research Methodology</li>
                        <li>MCA22 Artificial Intelligence and Machine Learning</li>
                        <li>MCA23 Information Security</li>
                        <li>MCAE24 Elective – 2
                            <ul>
                                <li>Internet of Things</li>
                                <li>Robotic Process Automation</li>
                                <li>Natural Language Processing</li>
                                <li>Design and Analysis of Algorithm</li>
                            </ul>
                        </li>
                        <li>MCAE25 Elective – 3
                            <ul>
                                <li>Green Computing &amp; Sustainability</li>
                                <li>Management Information System</li>
                                <li>Cyber Security</li>
                                <li>Soft Computing</li>
                            </ul>
                        </li>
                        <li>MCAL21 Soft Skill Development</li>
                        <li>MCAL22 AI &amp; Machine Learning Lab</li>
                        <li>MCAL23 DevOps Lab</li>
                        <li>MCAL25 Advanced Web Technologies Lab</li>
                        <li>MCAL26 User Interface Lab</li>
                        <li>MCAL27 Networking with Linux Lab</li>
                        <li>MCAP21 Mini Project – 1B</li>
                    </ul>
                </div>
            </details>

            <details class="semester-card">
                <summary><i class="fa fa-cogs"></i> Semester III</summary>
                <div class="semester-body">
                    <ul>
                        <li>MCA31 Big Data Analytics and Visualization</li>
                        <li>MCA32 Distributed System and Cloud Computing</li>
                        <li>MCAE33 Elective – 3
                            <ul>
                                <li>Blockchain</li>
                                <li>Deep Learning</li>
                                <li>Game Development</li>
                                <li>Ethical Hacking</li>
                                <li>Quantum Computing</li>
                            </ul>
                        </li>
                        <li>MCAE34 Elective – 4
                            <ul>
                                <li>Intellectual Property Rights</li>
                                <li>Green Computing</li>
                                <li>Management Information System</li>
                                <li>Cyber Security and Digital Forensics</li>
                                <li>Entrepreneurship Management</li>
                            </ul>
                        </li>
                        <li>MCAL31 Big Data Analytics and Visualization Lab</li>
                        <li>MCAL32 Distributed System and Cloud Computing Lab</li>
                        <li>MCALE33 Elective 3 Lab</li>
                        <li>MCAL34 Skill Based Lab Mobile Computing Lab</li>
                        <li>MCAL35 Software Testing Quality Assurance Lab</li>
                        <li>MCAP31 Mini Project – 2A</li>
                    </ul>
                </div>
            </details>

            <details class="semester-card">
                <summary><i class="fa fa-briefcase"></i> Semester IV</summary>
                <div class="semester-body">
                    <ul>
                        <li>MCAI41 Internship</li>
                        <li>MCAR42 Research Paper</li>
                        <li>MCAM43 Online Course - MOOC</li>
                        <li>MCAS44 Institute Social Responsibility</li>
                    </ul>
                </div>
            </details>

        </div>


        <!-- ==========================================================================
         NEW ADMISSION & ALUMNI SPEAK SECTIONS
         ========================================================================== -->
        <section class="admissions-process-section">
            <h2>MCA Admission Process</h2>
            <p>Candidates begin by filling out the application form and submitting any applicable disability
                certificates, followed by uploading all required documents for review. The process concludes with
                document verification at a designated centre and final confirmation of the application by the candidate.
            </p>

            <div class="admission-flow-wrap">
                <img class="admission-flow-img" src="https://www.met.edu/uploadfile/images/admission-MCA.png" alt="MCA Admission Process Flowchart">
            </div>

            <p>After verification at a designated centre and confirmation of the application, students proceed to attend
                CAP rounds where they fill in their option forms to indicate their preferred colleges and courses.</p>
        </section>

        <section class="admission-details-section">
            <div class="admission-details-grid">

                <!-- Documents Required Card -->
                <div class="docs-card">
                    <h3><i class="fa fa-file-text"></i> Documents Required at the time of Admission</h3>
                    <ul class="docs-list">
                        <li><strong>CET Score Card</strong></li>
                        <li><strong>SSC and HSC Mark Sheets</strong></li>
                        <li><strong>Graduation Mark Sheets</strong></li>
                        <li><strong>Leaving Certificate</strong></li>
                        <li><strong>Domicile Certificate</strong></li>
                        <li><strong>Caste Certificate</strong> (if applicable). Candidates will be required to submit
                            the Caste Certificate, Caste Validity Certificate, and Non-Creamy Layer if applicable, at
                            the time of filling the CAP application form to be considered under the reserved category.
                        </li>
                        <li><strong>Income Certificate</strong> (for EWS/Scholarship). Candidates will be required to
                            submit an Economically Weaker Section (EWS) Certificate, if applicable, at the time of
                            filling the CAP application form.</li>
                        <li><strong>Aadhaar Card</strong></li>
                        <li><strong>Passport-size Photos</strong></li>
                        <li><strong>APAAR ID and Aadhaar</strong> may be mandatory during registration.</li>
                    </ul>
                </div>

                <!-- Important Tips Card -->
                <div class="tips-card">
                    <h3><i class="fa fa-lightbulb-o"></i> Important Tips for Admission process</h3>
                    <ul class="tips-list">
                        <li>Fill the CAP option form carefully.</li>
                        <li>Keep all documents scanned and ready before registration.</li>
                        <li>Attend all CAP rounds regularly.</li>
                        <li>Check official notices and updates daily.</li>
                        <li>Keep backup college options while filling preferences.</li>
                        <li>If a student is allotted their first preference college, the seat may get automatically
                            frozen, and the student may not be eligible to participate in the next CAP rounds.</li>
                        <li>If a student is allotted a college other than their higher preference, they can select the
                            <strong>Betterment</strong> option to participate in the next CAP round for a better college
                            preference.
                        </li>
                        <li>Students selecting the Betterment option must complete the required seat acceptance process
                            within the stipulated schedule.</li>
                        <li>If a student receives a better allotment in the next CAP round, the previously allotted seat
                            will be automatically cancelled.</li>
                        <li>If no better allotment is received, the previously accepted seat will remain secured.</li>
                        <li>Students are advised to read the official guidelines of the State Common Entrance Test Cell
                            Maharashtra carefully before selecting the Betterment/Float option.</li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="alumni-section">
            <h2>Alumni Speak</h2>
            <div class="alumni-grid">

                <!-- Alumni Card 1 -->
                <div class="alumni-card">
                    <div class="alumni-info">
                        <img class="alumni-img" src="https://www.met.edu/uploadfile/images/Suraj_nag.jpg" alt="Suraj Nag">
                        <div class="alumni-meta">
                            <h3>Suraj Nag</h3>
                            <p>Software Developer, Cornerstone On Demand</p>
                        </div>
                    </div>
                    <div class="alumni-text">
                        <p>My journey at MET Institute of Computer Science during the MCA programme was truly
                            transformative. The institute provided the perfect blend of academic excellence, practical
                            exposure, and industry-oriented learning. The supportive faculty, hands-on projects, and
                            encouraging environment helped me strengthen my technical and professional skills with
                            confidence.</p>
                        <p>What I value the most is the constant motivation from mentors and the opportunities to
                            participate in workshops, seminars, and real-world learning experiences that prepared me for
                            the corporate world. MET ICS not only helped me build a strong foundation in technology but
                            also shaped my overall personality and career outlook.</p>
                        <p>I am proud to be an alumnus of MET ICS and grateful for the knowledge, guidance, and lifelong
                            memories I gained during my time here.</p>
                    </div>
                </div>

                <!-- Alumni Card 2 -->
                <div class="alumni-card">
                    <div class="alumni-info">
                        <img class="alumni-img" src="https://www.met.edu/uploadfile/images/Aarthi_pillai.jpg" alt="Aarthi Pillai">
                        <div class="alumni-meta">
                            <h3>Aarthi Pillai</h3>
                            <p>Productivity Tools Engineer, Priceline</p>
                        </div>
                    </div>
                    <div class="alumni-text">
                        <p>My experience at MET ICS during the MCA programme was truly enriching. The institute provided
                            a strong academic foundation along with practical exposure that helped me gain confidence
                            and industry-ready skills. The guidance from faculty and the encouraging learning
                            environment motivated me to continuously grow and explore new opportunities. I am thankful
                            to MET ICS for being an important part of my professional journey.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <div class="admission-actions">
            <div class="helpline-box">
                <i class="fa fa-phone"></i>
                <div>
                    <h3>Admission Helpline</h3>
                    <p>
                        <a href="tel:+917208006689">+91 7208006689</a> /
                        <a href="tel:+918390800392">+91 8390800392</a>
                    </p>
                </div>
            </div>

            <a class="vacant-seat-btn" href="https://www.met.edu/MCA_Admissions_Application_for_Institute_Level_Seats_and_Vacant_Seats">
                <i class="fa fa-external-link"></i>
                Vacant Seats against Cancellation
            </a>
        </div>


        <!-- ==========================================================================
         FAQ SECTION
         ========================================================================== -->
        <section class="faq-section">
            <h2>Frequently Asked Questions (FAQs)</h2>
            <div class="faq-accordion">

                <!-- FAQ 1 -->
                <details class="faq-card">
                    <summary>What is the duration of the MCA programme at MET ICS?</summary>
                    <div class="faq-content">
                        <p>The Master of Computer Applications (MCA) programme at MET ICS is a two-year full-time
                            postgraduate programme focused on advanced computing, software development, and emerging
                            technologies.</p>
                    </div>
                </details>

                <!-- FAQ 2 -->
                <details class="faq-card">
                    <summary>Is the MCA programme approved?</summary>
                    <div class="faq-content">
                        <p>Yes, the MCA programme is approved by the All India Council for Technical Education (AICTE)
                            and affiliated with University of Mumbai.</p>
                    </div>
                </details>

                <!-- FAQ 3 -->
                <details class="faq-card">
                    <summary>What specializations or advanced subjects are offered in the MCA programme?</summary>
                    <div class="faq-content">
                        <p>The curriculum includes subjects and electives in:</p>
                        <ul>
                            <li>Artificial Intelligence &amp; Machine Learning</li>
                            <li>Data Science</li>
                            <li>Full Stack Development</li>
                            <li>Cloud Computing</li>
                            <li>Cybersecurity</li>
                            <li>Mobile Application Development</li>
                            <li>IoT</li>
                            <li>Blockchain</li>
                            <li>Computer Vision</li>
                            <li>Natural Language Processing</li>
                        </ul>
                    </div>
                </details>

                <!-- FAQ 4 -->
                <details class="faq-card">
                    <summary>What is the eligibility criteria for MCA admission?</summary>
                    <div class="faq-content">
                        <p>Candidates should have completed graduation with the required eligibility criteria as
                            prescribed by the university and competent authorities. Admission is generally based on
                            entrance examination scores and merit.</p>
                    </div>
                </details>

                <!-- FAQ 5 -->
                <details class="faq-card">
                    <summary>Which entrance exams are accepted for MCA admission?</summary>
                    <div class="faq-content">
                        <p>Admissions are primarily conducted through relevant state or university-approved entrance
                            examination processes applicable for MCA admissions.</p>
                    </div>
                </details>

                <!-- FAQ 6 -->
                <details class="faq-card">
                    <summary>Does MET ICS provide placement assistance?</summary>
                    <div class="faq-content">
                        <p>Yes, MET ICS has an active placement and training cell that assists students with
                            internships, industry interaction, aptitude training, mock interviews, and campus
                            recruitment opportunities.</p>
                    </div>
                </details>

                <!-- FAQ 7 -->
                <details class="faq-card">
                    <summary>What type of companies recruit MCA students from MET ICS?</summary>
                    <div class="faq-content">
                        <p>Students receive opportunities from companies in:</p>
                        <ul>
                            <li>Software Development</li>
                            <li>IT Services</li>
                            <li>AI &amp; Analytics</li>
                            <li>Cloud &amp; DevOps</li>
                            <li>Finance</li>
                            <li>Digital Marketing</li>
                            <li>Consulting</li>
                            <li>Startups and Product-Based Companies</li>
                        </ul>
                    </div>
                </details>

                <!-- FAQ 8 -->
                <details class="faq-card">
                    <summary>Are internships included in the MCA programme?</summary>
                    <div class="faq-content">
                        <p>Yes, internships and industry projects form an important part of the programme to provide
                            practical exposure and real-world experience.</p>
                    </div>
                </details>

                <!-- FAQ 9 -->
                <details class="faq-card">
                    <summary>Does MET ICS focus on practical learning?</summary>
                    <div class="faq-content">
                        <p>Absolutely. The programme emphasizes:</p>
                        <ul>
                            <li>Project-based learning</li>
                            <li>Hackathons</li>
                            <li>Workshops</li>
                            <li>Coding competitions</li>
                            <li>Industry certifications</li>
                            <li>Live projects</li>
                            <li>Research and innovation activities</li>
                        </ul>
                    </div>
                </details>

                <!-- FAQ 10 -->
                <details class="faq-card">
                    <summary>Are there workshops and seminars on emerging technologies?</summary>
                    <div class="faq-content">
                        <p>Yes, MET ICS regularly organizes expert sessions, bootcamps, seminars, and hands-on workshops
                            on AI, Generative AI, Cybersecurity, Cloud Computing, Flutter, Agentic AI, and other
                            emerging domains.</p>
                    </div>
                </details>

                <!-- FAQ 11 -->
                <details class="faq-card">
                    <summary>Does the institute support research and innovation?</summary>
                    <div class="faq-content">
                        <p>Yes, students are encouraged to participate in research projects, paper publications,
                            innovation competitions, and technical conferences.</p>
                    </div>
                </details>

                <!-- FAQ 12 -->
                <details class="faq-card">
                    <summary>What facilities are available on campus for MCA students?</summary>
                    <div class="faq-content">
                        <p>MET ICS provides:</p>
                        <ul>
                            <li>Modern computer laboratories</li>
                            <li>High-speed internet</li>
                            <li>Digital classrooms</li>
                            <li>Library and e-resources</li>
                            <li>Seminar halls</li>
                            <li>Innovation and project support infrastructure</li>
                        </ul>
                    </div>
                </details>

                <!-- FAQ 13 -->
                <details class="faq-card">
                    <summary>Why should students choose the MCA programme at MET ICS?</summary>
                    <div class="faq-content">
                        <p>Key highlights include:</p>
                        <ul>
                            <li>Industry-oriented curriculum</li>
                            <li>Strong practical exposure</li>
                            <li>Experienced faculty</li>
                            <li>Focus on emerging technologies</li>
                            <li>Placement support</li>
                            <li>Innovation-driven learning environment</li>
                            <li>Opportunities for certifications, projects, and research</li>
                        </ul>
                    </div>
                </details>

                <!-- FAQ 14 -->
                <details class="faq-card">
                    <summary>How can students apply for the MCA programme?</summary>
                    <div class="faq-content">
                        <p>Students can apply through the official MET admission process available on the institute
                            website.</p>
                        <a class="faq-apply-btn" href="https://www.met.edu/MCA_Admissions_Application_for_Institute_Level_Seats_and_Vacant_Seats" target="_blank">Apply for Admission at MET ICS</a>
                    </div>
                </details>

            </div>
        </section>

        <div class="location-box">
            <h2>MET Institute of Computer Science is Located at</h2>

            <div class="map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.2713661532594!2d72.8267305143764!3d19.05180285768471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c975aa3141b3%3A0x60c26f1e683ded9!2sMET%20Institute%20of%20Computer%20Science!5e0!3m2!1sen!2sin!4v1675075622814!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</div>                                                        