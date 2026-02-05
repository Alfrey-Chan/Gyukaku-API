# Gyukaku API
A restaurant management system.

## Features
- Schedule
- Performance level system
- Training materials with test practice environment
- Vacation request
- Tips distribution system

### Schedule Scoring System
1. Availability Points (max 40 points)
- (Availabile marked / 28) * 40 
- Highest weight -> more availability = more shifts

2. Performance points (max 30 points)
- (1-5) * 6 
- Better workers get priority 

3. Seniority (max 10 points)
- (years employed / 5) * 2 
- capped at 5 years
- seniority has little weight 

4. Balance Penalty 
- minus (num shifts already assigned * 3)
- to allow those with no shifts a chance 
- e.g. 3 shifts -> -9 points