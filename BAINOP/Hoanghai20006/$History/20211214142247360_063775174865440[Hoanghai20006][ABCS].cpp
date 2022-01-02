#include<bits/stdc++.h>

using namespace std;

int main(){
    freopen("ABCS.INP", "r", stdin);
    freopen("ABCS.OUT", "w", stdout);
    long long a[7], temp;
    vector<long long> b;
    for(int i = 0; i<7; i++)
        cin >> a[i];
    sort(a, a+7);
    b.push_back(a[0]);
    b.push_back(a[1]);
    temp = a[6] - (a[0]+a[1]);
    b.push_back(temp);
    for(int i = 0; i<3; i++)
        cout <<b[i]<<" ";
}
