// 1. Select / Create Database
//use universityDB

// 2. Create Collection
db.createCollection("students")

// 3. INSERT DATA

db.students.insertOne({
  student_id: 1,
  name: "Rahim",
  department: "CSE",
  cgpa: 3.75
})

// Insert multiple documents
db.students.insertMany([
  {
    student_id: 2,
    name: "Karim",
    department: "EEE",
    cgpa: 3.60
  },
  {
    student_id: 3,
    name: "Ayesha",
    department: "BBA",
    cgpa: 3.80
  }
])

// 4. READ DATA (FIND QUERIES)

// Show all documents
db.students.find()

// Find specific department
db.students.find({ department: "CSE" })

// Find with condition (CGPA > 3.5)
db.students.find({ cgpa: { $gt: 3.5 } })

// OR condition
db.students.find({
  $or: [
    { department: "CSE" },
    { cgpa: { $gt: 3.7 } }
  ]
})

// Projection (select specific fields)
db.students.find(
  { department: "CSE" },
  { name: 1, cgpa: 1, _id: 0 }
)

// 5. UPDATE DATA

// Update one document
db.students.updateOne(
  { student_id: 1 },
  { $set: { cgpa: 4.00 } }
)

// Update multiple documents
db.students.updateMany(
  { department: "CSE" },
  { $set: { status: "active" } }
)

// 6. DELETE DATA

// Delete one document
db.students.deleteOne({ student_id: 2 })

// Delete multiple documents
db.students.deleteMany({ department: "EEE" })