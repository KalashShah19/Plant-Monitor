from statistics import LinearRegression
from tkinter import PhotoImage
import pandas as pd
import numpy as np
import matplotlib.pyplot as mtplt
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression 
from sklearn.linear_model import LinearRegression 


UpdatedCropData = pd.read_csv('ds1.csv')
UpdatedCropData['SumNPK'] = UpdatedCropData['N'] + UpdatedCropData['P'] + UpdatedCropData['K']
UpdatedCropData['PerOfN'] = (UpdatedCropData['N'] * 100)/UpdatedCropData['SumNPK']
UpdatedCropData['PerOfP'] = (UpdatedCropData['P'] * 100)/UpdatedCropData['SumNPK']
UpdatedCropData['PerOfK'] = (UpdatedCropData['K'] * 100)/UpdatedCropData['SumNPK']

UpdatedCropData['NStatus'] = 0
UpdatedCropData['PStatus'] = 0
UpdatedCropData['KStatus'] = 0

NList = list(UpdatedCropData.loc[(UpdatedCropData['PerOfN'] >= 55) & (UpdatedCropData['PerOfN'] <= 65)].index)
for i in NList:
    UpdatedCropData.at[i,'NStatus'] = 1
PList = list(UpdatedCropData.loc[(UpdatedCropData['PerOfP'] >= 16) & (UpdatedCropData['PerOfP'] <= 24)].index)
for i in PList:
    UpdatedCropData.at[i,'PStatus'] = 1
KList = list(UpdatedCropData.loc[(UpdatedCropData['PerOfK'] >= 16) & (UpdatedCropData['PerOfK'] <= 24)].index)
for i in KList:
    UpdatedCropData.at[i,'KStatus'] = 1




x_train,x_test,y_train,y_test = train_test_split(UpdatedCropData[['PerOfN']],UpdatedCropData['NStatus'],test_size=0.4)
Mdl = LogisticRegression()
Mdl.fit(x_train,y_train)


print("="*50)
print(Mdl.score(x_test,y_test))
print("="*50)
Predicted_Values = Mdl.predict(x_test)
print(Predicted_Values)
print("="*50)

DataFrameNew = pd.DataFrame()
DataFrameNew['PerOfN'] = x_test['PerOfN']
DataFrameNew['Prediction'] = Predicted_Values
print(DataFrameNew[DataFrameNew['Prediction'] == 1])

mtplt.scatter(list(x_test['PerOfN']),list(Predicted_Values))
mtplt.show()

# UpdatedCropData.to_csv('NewUpdatedData.csv')
x_train,x_test,y_train,y_test = train_test_split(UpdatedCropData[['PerOfP']],UpdatedCropData['PStatus'],test_size=0.4)
Mdl1 = LogisticRegression()
Mdl1.fit(x_train,y_train)
Prediction = Mdl1.predict(x_test)
print("="*50)
print(Prediction)
print("="*50)

DataFrameNew = pd.DataFrame()
DataFrameNew['PerOfP'] = x_test['PerOfP']
DataFrameNew['Prediction'] = Prediction
print(DataFrameNew[DataFrameNew['Prediction'] == 1])
mtplt.scatter(x_test['PerOfP'],Prediction)
mtplt.show()



x_train,x_test,y_train,y_test = train_test_split(UpdatedCropData[['PerOfK']],UpdatedCropData['KStatus'],test_size=0.4)
Mdl1 = LogisticRegression()
Mdl1.fit(x_train,y_train)   
Prediction = Mdl1.predict(x_test)
print("="*50)
print(Prediction)
print("="*50)

DataFrameNew = pd.DataFrame()
DataFrameNew['PerOfK'] = x_test['PerOfK']
DataFrameNew['Prediction'] = Prediction
print(DataFrameNew[DataFrameNew['Prediction'] == 1])
mtplt.scatter(x_test['PerOfK'],Prediction)
mtplt.show()