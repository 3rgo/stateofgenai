# State of Gen. AI Survey Platform - Functional Specifications

## 1. Project Overview

### 1.1 Purpose
The AI Survey Platform aims to create an annual "State of Generative AI" study focused on IT professionals, students, and workers in AI-adjacent fields. The platform serves both as a data collection tool and an educational resource to highlight best practices in AI usage.

### 1.2 Target Audiences
- **IT Students**: Students in computer science, software development, and related fields
- **IT Professionals**: Developers, DevOps engineers, data scientists, architects, etc.
- **Other Professionals**: Workers using AI in marketing, content creation, design, HR, etc.

### 1.3 Key Objectives
- Collect comprehensive data on AI adoption patterns
- Enable longitudinal tracking of AI usage evolution
- Provide insights into professional vs. educational AI practices
- Support international data collection across multiple languages
- Generate actionable insights for educators and industry professionals

---

## 2. User Flow & Authentication

### 2.1 Entry Process
1. User accesses survey landing page
2. Selects survey type (Students/Professionals/Others)
3. Enters email address for participation validation
4. System checks email uniqueness for current year survey
5. If eligible, user proceeds directly to survey form
6. If already participated, user sees completion message with option to view results

### 2.2 Email Validation
- No verification codes required (reduced friction)
- Email hashed (SHA256 + salt) for uniqueness checking
- Option to store clear email for longitudinal tracking (with explicit consent)
- Option to store clear email for results notification (separate consent)

### 2.3 GDPR Compliance
- Clear consent forms for data usage
- Separate checkboxes for:
  - Longitudinal tracking participation
  - Results notification subscription
- Right to data deletion
- Data processing transparency

---

## 3. Survey Structure

### 3.1 Multi-Step Wizard Implementation
Each survey type uses a multi-step wizard approach to improve user experience:

#### 3.1.1 Students Survey (5 Steps)
**Step 1: Profile (5 questions)**
- Birth year (free input)
- Education level (Bachelor+2/3/4/5)
- Training type (Initial/Apprenticeship/Continuing education)
- Specialization (Web dev/Mobile/Data/DevOps/Cybersecurity/Other)
- Internship experience (Yes/No/Currently)

**Step 2: AI Usage (4 questions)**
- AI tools used (ChatGPT/Claude/Copilot/Gemini/Other/None)
- Usage duration (< 6 months/6-12 months/1-2 years/2+ years)
- Usage frequency (Daily/Weekly/Monthly/Rare)
- Monthly budget (Free only/1-20€/20-50€/50€+)

**Step 3: Work Methods (5 questions)**
- Usage contexts (Homework/Personal projects/School projects/Studying/Interview prep)
- Code percentage using AI (0-25%/25-50%/50-75%/75-100%)
- Primary AI usage type (multiple choice)
- Code modification frequency (Always/Often/Sometimes/Never)
- Code testing before usage (Always/Often/Sometimes/Never)

**Step 4: Learning Impact (3 questions)**
- Development speed evolution (Much faster/Faster/Same/Slower)
- Problem-solving ability without AI (Improved/Stable/Degraded/Don't know)
- Code explanation ability (Always/Often/Sometimes/Never)

**Step 5: Career & Consent (3 questions)**
- Technical difficulties in internships/interviews (Never had/No/Yes slight/Yes significant)
- Comfort working without AI access (Very comfortable/Comfortable/Difficult/Impossible)
- Consent checkboxes for tracking and results

#### 3.1.2 IT Professionals Survey (6 Steps)
**Step 1: Profile (6 questions)**
- Country
- Birth year
- Gender
- Professional status (Employee/Freelance/Executive/Consultant)
- IT experience years (0-2/3-5/6-10/11-15/16-20/20+)
- Main domain (Web dev/Mobile/Data-AI/DevOps/Cybersecurity/Architecture/Management/Other)
- Company size (< 10/10-50/51-250/251-1000/1000+)
- Business sector (IT services/Startup/SME tech/Large enterprise/Public/Other)

**Step 2: Company Policy (1 question + conditional logic)**
- Company AI authorization (Yes encouraged/Yes tolerated/No forbidden/No blocked/Don't know)

*If "No forbidden" or "No blocked":*
- Personal usage despite restrictions (Yes regularly/Yes occasionally/Never)
- Impact of restrictions (A lot/A little/Not at all)
- Personal project usage (Yes a lot/Yes a little/No)
- How restrictions are bypassed (Personal phone/VPN/Other means)
- Colleagues' awareness (Yes we all do it/Some know/No I'm discreet)
- **End survey for this group**

*If "Yes":*
**Step 3: Professional AI Usage (5 questions)**
- AI tools used at work
- Professional usage duration
- Usage frequency
- AI access funding (Personal/Company/Both/Free only)
- Monthly AI budget (Personal + company)

**Step 4: Work Methods (5 questions)**
- AI usage contexts (Development/Debug/Code review/Architecture/Documentation/Team training/Tech watch)
- Code percentage using AI (0-15%/16-35%/36-55%/56-75%/76-100%)
- Primary AI usage type
- Generated code review frequency
- Peer testing of AI code

**Step 5: Professional Impact (5 questions)**
- Productivity impact
- Code quality impact
- Team collective AI usage
- AI training provision to others
- Career approach change

**Step 6: Consent (2 questions)**
- Longitudinal tracking consent
- Results notification consent

#### 3.1.3 Other Professionals Survey (6 Steps)
Similar structure adapted for non-IT professionals with domain-specific questions.

### 3.2 Question Types
- Single choice (radio buttons)
- Multiple choice (checkboxes)
- Text input (birth year, other specifications)
- Dropdown with search (country selection)
- Consent checkboxes

### 3.3 Conditional Logic
- Dynamic question display based on previous answers
- Step validation before progression
- Skip patterns for different user paths

---

## 4. Multilingual Support

### 4.1 Supported Languages
**Phase 1:**
- French (fr)
- English (en)
- Spanish (es)
- German (de)

**Phase 2 (potential):**
- Italian (it)
- Portuguese (pt)
- Dutch (nl)

### 4.2 Localization Features
- Automatic browser language detection
- Language selector in header
- Localized URLs: `/en/survey/students-2024`
- Complete translation of:
  - All survey questions and answers
  - UI elements and navigation
  - Email communications
  - Legal texts and GDPR notices

### 4.3 Geographic Support
- Complete country list with search functionality
- Automatic IP-based country detection
- Manual country selection override
- Country data stored for geographic analysis

---

## 5. Data Persistence & UX

### 5.1 Automatic Progress Saving
- Real-time form data persistence using Livewire
- No data loss on page refresh or browser closure
- Progress indicator showing completion percentage
- Step-by-step validation

### 5.2 Navigation Features
- Previous/Next step navigation
- Jump to specific steps (if validation passed)
- Progress bar with step indicators
- Estimated completion time display

### 5.3 Form Validation
- Real-time validation feedback
- Step-level validation before progression
- Clear error messaging
- Required field indicators

---

## 6. Administrative Dashboard

### 6.1 Filament Admin Panel Features
- **Participant Management**
  - View all participants with anonymized data
  - Filter by consent status, participation date
  - Export participant lists
  - GDPR compliance tools (data deletion)

- **Response Analysis**
  - View all survey responses
  - Filter by survey type, country, language, date
  - Export filtered datasets
  - Response quality metrics

- **Survey Management**
  - Activate/deactivate surveys
  - Clone surveys for new years
  - Modify survey configurations
  - Preview surveys in different languages

### 6.2 Analytics Dashboard
- **Real-time Statistics**
  - Total responses by type
  - Daily/weekly participation rates
  - Geographic distribution
  - Language usage statistics
  - Abandonment rates by step

- **Data Quality Monitoring**
  - Completion rates
  - Time spent per step
  - Common validation errors
  - Duplicate detection

### 6.3 Export Capabilities
- CSV/Excel exports with filtering
- Anonymized vs. full data exports (permission-based)
- Longitudinal data exports for trend analysis
- Statistical summary reports

---

## 7. Longitudinal Tracking System

### 7.1 Participant Identification
- UUID-based participant identification
- Email hash for anonymous tracking
- Clear email storage only with explicit consent
- Cross-year participation linking

### 7.2 Yearly Participation Management
- Automatic detection of returning participants
- Prevention of duplicate responses within same year
- Allow new responses for subsequent years
- Historical participation tracking

### 7.3 Trend Analysis Features
- Year-over-year comparison reports
- Individual progression tracking (consented participants)
- Cohort analysis capabilities
- Retention rate monitoring

---

## 8. Public Statistics & Results

### 8.1 Public Dashboard
- Interactive charts and graphs
- Filter capabilities (year, country, profession)
- Key insights and trends
- Downloadable summary reports

### 8.2 Data Visualization
- Demographics breakdown
- AI tool adoption rates
- Usage pattern analysis
- Geographic distribution maps
- Temporal trend analysis

### 8.3 Research API
- Public API endpoints for aggregated data
- Rate-limited access
- Documentation for researchers
- Attribution requirements

---

## 9. Email Communications

### 9.1 Automated Emails
- **Completion Confirmation**
  - Thank you message
  - Survey ID for reference
  - Link to public results (when available)

- **Results Notification** (if consented)
  - Annual results publication notice
  - Personalized insights
  - Comparative analysis with previous year

- **Longitudinal Reminders** (if consented)
  - Annual participation reminders
  - Personalized messaging
  - Easy opt-out mechanism

### 9.2 Email Customization
- Multilingual email templates
- Personalization based on survey type
- Professional, academic tone
- GDPR-compliant footer information

---

## 10. Security & Privacy

### 10.1 Data Protection
- Email hashing for anonymity
- Secure storage of consented emails
- Regular data cleanup procedures
- GDPR-compliant data handling

### 10.2 Technical Security
- Rate limiting for survey submissions
- Input validation and sanitization
- Secure session management
- Regular security updates

### 10.3 Privacy Controls
- Clear data usage notifications
- Granular consent options
- Easy data deletion requests
- Transparent privacy policy

---

## 11. Performance & Scalability

### 11.1 Optimization Features
- Efficient database indexing
- Caching for public statistics
- Optimized query performance
- CDN for static assets

### 11.2 Monitoring
- Response time monitoring
- Error rate tracking
- User engagement metrics
- Server performance monitoring

---

## 12. Future Enhancements

### 12.1 Potential Features
- Social media sharing of personalized results
- Embedded survey widgets for universities/companies
- Advanced analytics with AI insights
- Integration with academic research platforms
- Mobile application development

### 12.2 Expansion Possibilities
- Industry-specific survey variants
- Regional customization options
- Third-party tool integrations
- Academic partnership features
- Benchmarking tools for organizations

---

## 13. Success Metrics

### 13.1 Engagement Metrics
- Survey completion rates (target: >80%)
- Average time per survey
- Step abandonment rates
- Return participation rates (longitudinal)

### 13.2 Data Quality Metrics
- Response validation success rates
- Duplicate detection accuracy
- Data consistency across years
- International participation distribution

### 13.3 Impact Metrics
- Academic citations and references
- Media coverage and industry adoption
- Educational tool usage
- Policy influence potential
